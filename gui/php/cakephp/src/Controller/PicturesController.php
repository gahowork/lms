<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pictures Controller
 *
 * @property \App\Model\Table\PicturesTable $Pictures
 */
class PicturesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $pictures = $this->paginate($this->Pictures);

        $this->set(compact('pictures'));
        $this->set('_serialize', ['pictures']);
    }

    /**
     * View method
     *
     * @param string|null $id Picture id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $picture = $this->Pictures->get($id, [
            'contain' => ['Answerpictures', 'Categories', 'Levels', 'Questionpictures']
        ]);

        $this->set('picture', $picture);
        $this->set('_serialize', ['picture']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $picture = $this->Pictures->newEntity();
        if ($this->request->is('post')) {
			$filedata = $this->request->data['File'];
			unset($this->request->data['File']);

			$uploadedFiles = $this->uploadFiles('img/upload', $filedata);
			$this->request->data['filename'] = $uploadedFiles['urls'][0]['filename'];

			$picture = $this->Pictures->patchEntity($picture, $this->request->data);
            if ($this->Pictures->save($picture)) {
                $this->Flash->success(__('The picture has been saved.'));

                return $this->redirect(['action' => 'view', $picture->id]);
            }
            $this->Flash->error(__('The picture could not be saved. Please, try again.'));
        }
        $this->set(compact('picture'));
        $this->set('_serialize', ['picture']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Picture id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $picture = $this->Pictures->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $picture = $this->Pictures->patchEntity($picture, $this->request->data);
            if ($this->Pictures->save($picture)) {
                $this->Flash->success(__('The picture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The picture could not be saved. Please, try again.'));
        }
        $this->set(compact('picture'));
        $this->set('_serialize', ['picture']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Picture id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $picture = $this->Pictures->get($id);
        if ($this->Pictures->delete($picture)) {
            $this->Flash->success(__('The picture has been deleted.'));
        } else {
            $this->Flash->error(__('The picture could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

	function uploadFiles($folder, $formdata) {
		$folder_url = WWW_ROOT.$folder;
		$rel_url = $folder;

		if(!is_dir($folder_url)) {
			mkdir($folder_url);
		}

		$permitted = array('image/gif','image/jpeg','image/pjpeg','image/png');

		foreach($formdata as $file) {
			$filename = str_replace(' ', '_', $file['name']);
			$typeOK = false;
			foreach($permitted as $type) {
				if($type == $file['type']) {
					$typeOK = true;
					break;
				}
			}

			if($typeOK) {
				switch($file['error']) {
					case 0:
						$newfilename = uniqid('lms_', true);
						$maxtrys = 10;
						while (file_exists($folder_url.'/'.$newfilename)) {
							$newfilename = uniqid('lms_', true);
							$maxtrys -= 1;
							if( $maxtrys < 1) { break; }
						}
						$full_url = $folder_url.'/'.$newfilename;
						$url = $rel_url.'/'.$newfilename;
						$success = move_uploaded_file($file['tmp_name'], $url);

						if($success) {
							$result['urls'][] = [
								'url'=>$url,
								'full_url'=>$full_url,
								'filename'=>$newfilename
							];
						} else {
							$result['errors'][] = "Error uploaded $filename. Please try again.";
						}
						break;
					case 3:
						$result['errors'][] = "Error uploading $filename. Please try again.";
						break;
					default:
						$result['errors'][] = "System error uploading $filename. Contact webmaster.";
						break;
				}
			} elseif($file['error'] == 4) {
				$result['nofiles'][] = "No file Selected";
			} else {
				$result['errors'][] = "$filename cannot be uploaded. Acceptable file types: gif, jpg, png.";
			}
		}
		return $result;
	}

}
