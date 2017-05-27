INSERT INTO pictures(id, description, filename) VALUES(1, 'Dummy Picture 1', 'picture_1.png');
INSERT INTO pictures(id, description, filename) VALUES(2, 'Dummy Picture 2', 'picture_2.png');
INSERT INTO pictures(id, description, filename) VALUES(3, 'Dummy Picture 3', 'picture_3.png');
INSERT INTO pictures(id, description, filename) VALUES(4, 'Dummy Picture 4', 'picture_4.png');
INSERT INTO pictures(id, description, filename) VALUES(5, 'Dummy Picture 5', 'picture_5.png');
INSERT INTO pictures(id, description, filename) VALUES(6, 'Dummy Picture 6', 'picture_6.png');
INSERT INTO pictures(id, description, filename) VALUES(7, 'Dummy Picture 7', 'picture_7.png');
INSERT INTO pictures(id, description, filename) VALUES(8, 'Dummy Picture 8', 'picture_8.png');
INSERT INTO pictures(id, description, filename) VALUES(9, 'Dummy Picture 9', 'picture_9.png');
INSERT INTO pictures(id, description, filename) VALUES(10, 'Dummy Picture 10', 'picture_10.png');
INSERT INTO pictures(id, description, filename) VALUES(11, 'Dummy Picture 11', 'picture_11.png');
INSERT INTO pictures(id, description, filename) VALUES(12, 'Dummy Picture 12', 'picture_12.png');
INSERT INTO pictures(id, description, filename) VALUES(13, 'Dummy Picture 13', 'picture_13.png');
INSERT INTO pictures(id, description, filename) VALUES(14, 'Dummy Picture 14', 'picture_14.png');
INSERT INTO pictures(id, description, filename) VALUES(15, 'Dummy Picture 15', 'picture_15.png');
INSERT INTO pictures(id, description, filename) VALUES(16, 'Dummy Picture 16', 'picture_16.png');
INSERT INTO pictures(id, description, filename) VALUES(17, 'Dummy Picture 17', 'picture_17.png');
INSERT INTO pictures(id, description, filename) VALUES(18, 'Dummy Picture 18', 'picture_18.png');
INSERT INTO pictures(id, description, filename) VALUES(19, 'Dummy Picture 19', 'picture_19.png');
INSERT INTO pictures(id, description, filename) VALUES(20, 'Dummy Picture 20', 'picture_20.png');

INSERT INTO categories(id, description, picture_id) VALUES(1, 'Category 1', 1);
INSERT INTO categories(id, description, picture_id) VALUES(2, 'Category 2', 1);
INSERT INTO categories(id, description, picture_id) VALUES(3, 'Category 3', 1);
INSERT INTO categories(id, description, picture_id) VALUES(4, 'Category 4', 1);

INSERT INTO levels(description, picture_id, levelpoints, leveltarget) VALUES ('Level 1', 1, 100, 0);
INSERT INTO levels(description, picture_id, levelpoints, leveltarget) VALUES ('Level 2', 1, 50, 1000);
INSERT INTO levels(description, picture_id, levelpoints, leveltarget) VALUES ('Level 3', 1, 25, 2000);
INSERT INTO levels(description, picture_id, levelpoints, leveltarget) VALUES ('Level 4', 1, 12, 4000);
INSERT INTO levels(description, picture_id, levelpoints, leveltarget) VALUES ('Level 5', 1, 6, 8000);

INSERT INTO questiontypes(id, description) VALUES (1, 'Text');
INSERT INTO questiontypes(id, description) VALUES (2, 'Picture');
INSERT INTO questiontypes(id, description) VALUES (3, 'Text and Picture');

delimiter //
CREATE PROCEDURE generatequestions(maxcount INT)
BEGIN
	DECLARE loop_c INT DEFAULT 1;

	WHILE loop_c <= maxcount DO
		INSERT INTO questions(id, header, description, questiontype_id) VALUES(loop_c, CONCAT('Question ', loop_c), 'Select one', 1);
		SET loop_c = loop_c + 1;
	END WHILE;
END;
//
CALL generatequestions(300);
DROP PROCEDURE generatequestions;

INSERT INTO questions(id, header, description, questiontype_id) VALUES(301, 'How deep the rabbit hole gooes', 'Select one', 1);

INSERT INTO questionanswers(question_id, answer, result) VALUES(1, 'Answer 1', 1);
INSERT INTO questionanswers(question_id, answer, result) VALUES(1, 'Answer 2', 0);
INSERT INTO questionanswers(question_id, answer, result) VALUES(1, 'Answer 3', 0);
INSERT INTO questionanswers(question_id, answer, result) VALUES(1, 'Answer 4', 0);

INSERT INTO questionanswers(question_id, answer, result) VALUES(2, 'Answer 5', 0);
INSERT INTO questionanswers(question_id, answer, result) VALUES(2, 'Answer 6', 1);
INSERT INTO questionanswers(question_id, answer, result) VALUES(2, 'Answer 7', 0);
INSERT INTO questionanswers(question_id, answer, result) VALUES(2, 'Answer 8', 0);

INSERT INTO questionanswers(question_id, answer, result) VALUES(3, 'Answer 5', 0);
INSERT INTO questionanswers(question_id, answer, result) VALUES(3, 'Answer 6', 0);
INSERT INTO questionanswers(question_id, answer, result) VALUES(3, 'Answer 7', 1);
INSERT INTO questionanswers(question_id, answer, result) VALUES(3, 'Answer 8', 0);

INSERT INTO questionanswers(question_id, answer, result) VALUES(4, 'Answer 1', 0);
INSERT INTO questionanswers(question_id, answer, result) VALUES(4, 'Answer 2', 0);
INSERT INTO questionanswers(question_id, answer, result) VALUES(4, 'Answer 3', 0);
INSERT INTO questionanswers(question_id, answer, result) VALUES(4, 'Answer 4', 1);

INSERT INTO questionanswers(question_id, answer, result) VALUES(5, 'Answer 1', 1);
INSERT INTO questionanswers(question_id, answer, result) VALUES(5, 'Answer 2', 0);
INSERT INTO questionanswers(question_id, answer, result) VALUES(5, 'Answer 5', 0);
INSERT INTO questionanswers(question_id, answer, result) VALUES(5, 'Answer 6', 0);

INSERT INTO questionanswers(question_id, answer, result) VALUES(301, 'The answer is 21, i know it.', 0);
INSERT INTO questionanswers(question_id, answer, result) VALUES(301, 'I dont know', 0);
INSERT INTO questionanswers(question_id, answer, result) VALUES(301, '4375 rabbitfeet or 64738 goosefeet', 1);
INSERT INTO questionanswers(question_id, answer, result) VALUES(301, 'Can i ask alice?', 0);

INSERT INTO questioncategories(question_id, category_id) VALUES(1, 1);
INSERT INTO questioncategories(question_id, category_id) VALUES(2, 1);
INSERT INTO questioncategories(question_id, category_id) VALUES(3, 2);
INSERT INTO questioncategories(question_id, category_id) VALUES(4, 2);
INSERT INTO questioncategories(question_id, category_id) VALUES(5, 3);
INSERT INTO questioncategories(question_id, category_id) VALUES(6, 3);

INSERT INTO questionlevels(question_id, level_id) VALUES(1, 1);
INSERT INTO questionlevels(question_id, level_id) VALUES(2, 1);
INSERT INTO questionlevels(question_id, level_id) VALUES(2, 2);
INSERT INTO questionlevels(question_id, level_id) VALUES(3, 2);
INSERT INTO questionlevels(question_id, level_id) VALUES(3, 3);
INSERT INTO questionlevels(question_id, level_id) VALUES(3, 4);
INSERT INTO questionlevels(question_id, level_id) VALUES(4, 3);
INSERT INTO questionlevels(question_id, level_id) VALUES(4, 4);
INSERT INTO questionlevels(question_id, level_id) VALUES(4, 5);
INSERT INTO questionlevels(question_id, level_id) VALUES(5, 4);
INSERT INTO questionlevels(question_id, level_id) VALUES(5, 5);

INSERT INTO adventures(id, description) VALUES(1, 'Adventure 1');
INSERT INTO adventures(id, description) VALUES(2, 'Adventure 2');
INSERT INTO adventures(id, description) VALUES(3, 'Adventure 3');
INSERT INTO adventures(id, description) VALUES(4, 'Adventure 4');

INSERT INTO adventurequestions(adventure_id, question_id) VALUES(1, 1);
INSERT INTO adventurequestions(adventure_id, question_id) VALUES(1, 2);
INSERT INTO adventurequestions(adventure_id, question_id) VALUES(1, 3);
INSERT INTO adventurequestions(adventure_id, question_id) VALUES(1, 4);
INSERT INTO adventurequestions(adventure_id, question_id) VALUES(2, 5);
INSERT INTO adventurequestions(adventure_id, question_id) VALUES(2, 6);
INSERT INTO adventurequestions(adventure_id, question_id) VALUES(2, 7);
INSERT INTO adventurequestions(adventure_id, question_id) VALUES(2, 8);
INSERT INTO adventurequestions(adventure_id, question_id) VALUES(3, 9);
INSERT INTO adventurequestions(adventure_id, question_id) VALUES(3, 10);
INSERT INTO adventurequestions(adventure_id, question_id) VALUES(3, 11);
INSERT INTO adventurequestions(adventure_id, question_id) VALUES(3, 12);

INSERT INTO questionpictures(question_id, picture_id) VALUES(1, 1);
INSERT INTO questionpictures(question_id, picture_id) VALUES(2, 2);
INSERT INTO questionpictures(question_id, picture_id) VALUES(3, 3);
INSERT INTO questionpictures(question_id, picture_id) VALUES(4, 1);
INSERT INTO questionpictures(question_id, picture_id) VALUES(4, 2);
INSERT INTO questionpictures(question_id, picture_id) VALUES(4, 3);

INSERT INTO questionanswerpictures(questionanswer_id, picture_id) VALUES(1, 1);
INSERT INTO questionanswerpictures(questionanswer_id, picture_id) VALUES(2, 2);
INSERT INTO questionanswerpictures(questionanswer_id, picture_id) VALUES(3, 3);
INSERT INTO questionanswerpictures(questionanswer_id, picture_id) VALUES(4, 4);
INSERT INTO questionanswerpictures(questionanswer_id, picture_id) VALUES(5, 5);
INSERT INTO questionanswerpictures(questionanswer_id, picture_id) VALUES(6, 6);
INSERT INTO questionanswerpictures(questionanswer_id, picture_id) VALUES(7, 7);
INSERT INTO questionanswerpictures(questionanswer_id, picture_id) VALUES(8, 8);
INSERT INTO questionanswerpictures(questionanswer_id, picture_id) VALUES(9, 9);
INSERT INTO questionanswerpictures(questionanswer_id, picture_id) VALUES(10, 10);
INSERT INTO questionanswerpictures(questionanswer_id, picture_id) VALUES(11, 11);
INSERT INTO questionanswerpictures(questionanswer_id, picture_id) VALUES(12, 12);
INSERT INTO questionanswerpictures(questionanswer_id, picture_id) VALUES(13, 13);
INSERT INTO questionanswerpictures(questionanswer_id, picture_id) VALUES(13, 14);
INSERT INTO questionanswerpictures(questionanswer_id, picture_id) VALUES(14, 15);
INSERT INTO questionanswerpictures(questionanswer_id, picture_id) VALUES(14, 16);
INSERT INTO questionanswerpictures(questionanswer_id, picture_id) VALUES(15, 17);
INSERT INTO questionanswerpictures(questionanswer_id, picture_id) VALUES(15, 18);
INSERT INTO questionanswerpictures(questionanswer_id, picture_id) VALUES(16, 19);
INSERT INTO questionanswerpictures(questionanswer_id, picture_id) VALUES(16, 20);
