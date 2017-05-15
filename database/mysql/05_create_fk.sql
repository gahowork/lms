ALTER TABLE adventurequestions
ADD
	CONSTRAINT fk_adventurequestions_adventures
		FOREIGN KEY (adventure_id)
		REFERENCES adventures (id);

ALTER TABLE adventurequestions
ADD
	CONSTRAINT fk_adventurequestions_questions
		FOREIGN KEY (question_id)
		REFERENCES questions (id);

ALTER TABLE answerpictures
ADD
	CONSTRAINT fk_answerpictures_answers
		FOREIGN KEY (answer_id)
		REFERENCES answers (id);

ALTER TABLE answerpictures
ADD
	CONSTRAINT fk_answerpictures_pictures
		FOREIGN KEY (picture_id)
		REFERENCES pictures (id);

ALTER TABLE categories
ADD
	CONSTRAINT fk_categories_pictures
		FOREIGN KEY (picture_id)
		REFERENCES pictures (id);

ALTER TABLE games
ADD
	CONSTRAINT fk_games_users
		FOREIGN KEY (user_id)
		REFERENCES users (id);

ALTER TABLE gamehistories
ADD
	CONSTRAINT fk_gamehistories_games
		FOREIGN KEY (game_id)
		REFERENCES games (id);

ALTER TABLE gamehistories
ADD
	CONSTRAINT fk_gamehistories_questionanswers
		FOREIGN KEY (questionanswers_id)
		REFERENCES questionanswers (id);

ALTER TABLE levels
ADD
	CONSTRAINT fk_levels_pictures
		FOREIGN KEY (picture_id)
		REFERENCES pictures (id);

ALTER TABLE questions
ADD
	CONSTRAINT fk_questions_questiontypes
		FOREIGN KEY (questiontype_id)
		REFERENCES questiontypes (id);

ALTER TABLE questionanswers
ADD
	CONSTRAINT fk_questionanswers_questions
		FOREIGN KEY (question_id)
		REFERENCES questions (id);

ALTER TABLE questionanswers
ADD
	CONSTRAINT fk_questionanswers_answers
		FOREIGN KEY (answer_id)
		REFERENCES answers (id);

ALTER TABLE questioncategories
ADD
	CONSTRAINT fk_questioncategories_questions
		FOREIGN KEY (question_id)
		REFERENCES questions (id);

ALTER TABLE questioncategories
ADD
	CONSTRAINT fk_questioncategories_categories
		FOREIGN KEY (category_id)
		REFERENCES categories (id);

ALTER TABLE questionlevels
ADD
	CONSTRAINT fk_questionlevels_questions
		FOREIGN KEY (question_id)
		REFERENCES questions (id);

ALTER TABLE questionlevels
ADD
	CONSTRAINT fk_questionlevels_levels
		FOREIGN KEY (level_id)
		REFERENCES levels (id);

ALTER TABLE questionpictures
ADD
	CONSTRAINT fk_questionpictures_question
		FOREIGN KEY (question_id)
		REFERENCES questions (id);

ALTER TABLE questionpictures
ADD
	CONSTRAINT fk_questionpictures_pictures
		FOREIGN KEY (picture_id)
		REFERENCES pictures (id);

ALTER TABLE users
ADD
	CONSTRAINT fk_users_usergroups
		FOREIGN KEY (usergroup_id)
		REFERENCES usergroups (id);
