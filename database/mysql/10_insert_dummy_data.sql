INSERT INTO pictures(id, description, filename) VALUES(1, 'Dummy Picture 1', 'picture_1.png');
INSERT INTO pictures(id, description, filename) VALUES(2, 'Dummy Picture 2', 'picture_2.png');
INSERT INTO pictures(id, description, filename) VALUES(3, 'Dummy Picture 3', 'picture_3.png');

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

INSERT INTO answers(id, description) VALUES (1, 'Answer 1');
INSERT INTO answers(id, description) VALUES (2, 'Answer 2');
INSERT INTO answers(id, description) VALUES (3, 'Answer 3');
INSERT INTO answers(id, description) VALUES (4, 'Answer 4');
INSERT INTO answers(id, description) VALUES (5, 'Answer 5');
INSERT INTO answers(id, description) VALUES (6, 'Answer 6');
INSERT INTO answers(id, description) VALUES (7, 'Answer 7');
INSERT INTO answers(id, description) VALUES (8, 'Answer 8');
INSERT INTO answers(id, description) VALUES (9, 'The answer is 21, i know it.');
INSERT INTO answers(id, description) VALUES (10, 'I dont know');
INSERT INTO answers(id, description) VALUES (11, '4375 rabbitfeet or 64738 goosefeet');
INSERT INTO answers(id, description) VALUES (12, 'Can i ask alice?');

INSERT INTO questionanswers(question_id, answer_id, result) VALUES(1, 1, 1);
INSERT INTO questionanswers(question_id, answer_id, result) VALUES(1, 2, 0);
INSERT INTO questionanswers(question_id, answer_id, result) VALUES(1, 3, 0);
INSERT INTO questionanswers(question_id, answer_id, result) VALUES(1, 4, 0);

INSERT INTO questionanswers(question_id, answer_id, result) VALUES(2, 5, 0);
INSERT INTO questionanswers(question_id, answer_id, result) VALUES(2, 6, 1);
INSERT INTO questionanswers(question_id, answer_id, result) VALUES(2, 7, 0);
INSERT INTO questionanswers(question_id, answer_id, result) VALUES(2, 8, 0);

INSERT INTO questionanswers(question_id, answer_id, result) VALUES(3, 5, 1);
INSERT INTO questionanswers(question_id, answer_id, result) VALUES(3, 6, 1);
INSERT INTO questionanswers(question_id, answer_id, result) VALUES(3, 7, 0);
INSERT INTO questionanswers(question_id, answer_id, result) VALUES(3, 8, 1);

INSERT INTO questionanswers(question_id, answer_id, result) VALUES(301, 9, 0);
INSERT INTO questionanswers(question_id, answer_id, result) VALUES(301, 10, 0);
INSERT INTO questionanswers(question_id, answer_id, result) VALUES(301, 11, 1);
INSERT INTO questionanswers(question_id, answer_id, result) VALUES(301, 12, 0);

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

INSERT INTO answerpictures(answer_id, picture_id) VALUES(1, 1);
INSERT INTO answerpictures(answer_id, picture_id) VALUES(2, 1);
INSERT INTO answerpictures(answer_id, picture_id) VALUES(3, 1);
INSERT INTO answerpictures(answer_id, picture_id) VALUES(4, 1);
INSERT INTO answerpictures(answer_id, picture_id) VALUES(5, 1);
INSERT INTO answerpictures(answer_id, picture_id) VALUES(7, 1);
INSERT INTO answerpictures(answer_id, picture_id) VALUES(8, 1);
INSERT INTO answerpictures(answer_id, picture_id) VALUES(8, 2);

INSERT INTO questionpictures(question_id, picture_id) VALUES(1, 1);
INSERT INTO questionpictures(question_id, picture_id) VALUES(2, 2);
INSERT INTO questionpictures(question_id, picture_id) VALUES(3, 3);
INSERT INTO questionpictures(question_id, picture_id) VALUES(4, 1);
INSERT INTO questionpictures(question_id, picture_id) VALUES(4, 2);
INSERT INTO questionpictures(question_id, picture_id) VALUES(4, 3);
