-- speed up relations
CREATE INDEX ix_adventurequestions_adventure_id ON adventurequestions(adventure_id ASC);
CREATE INDEX ix_adventurequestions_question_id ON adventurequestions(question_id ASC);
CREATE INDEX ix_answerpictures_answer_id ON answerpictures(answer_id ASC);
CREATE INDEX ix_answerpictures_picture_id ON answerpictures(picture_id ASC);
CREATE INDEX ix_categories_picture_id ON categories(picture_id ASC);
CREATE INDEX ix_games_user_id ON games(user_id ASC);
CREATE INDEX ix_gamehistories_game_id ON gamehistories(game_id ASC);
CREATE INDEX ix_gamehistories_questionanswers_id ON gamehistories(questionanswers_id ASC);
CREATE INDEX ix_levels_picture_id ON levels(picture_id ASC);
CREATE INDEX ix_questions_questiontype_id ON questions(questiontype_id ASC);
CREATE INDEX ix_questionanswers_question_id ON questionanswers(question_id ASC);
CREATE INDEX ix_questionanswers_answer_id ON questionanswers(answer_id ASC);
CREATE INDEX ix_questioncategories_question_id ON questioncategories(question_id ASC);
CREATE INDEX ix_questioncategories_category_id ON questioncategories(category_id ASC);
CREATE INDEX ix_questionlevels_question_id ON questionlevels(question_id ASC);
CREATE INDEX ix_questionlevels_level_id ON questionlevels(level_id ASC);
CREATE INDEX ix_questionpictures_question_id ON questionpictures(question_id ASC);
CREATE INDEX ix_questionpictures_picture_id ON questionpictures(picture_id ASC);
CREATE INDEX ix_users_usergroup_id ON users(usergroup_id ASC);

-- prevent duplicates
CREATE UNIQUE INDEX ux_adventures ON adventures(description ASC);
CREATE UNIQUE INDEX ux_adventurequestions ON adventurequestions(adventure_id ASC, question_id ASC);
CREATE UNIQUE INDEX ux_answers ON answers(description ASC);
CREATE UNIQUE INDEX ux_answerpictures ON answerpictures(answer_id ASC, picture_id ASC);
CREATE UNIQUE INDEX ux_categories ON categories(description ASC);
CREATE UNIQUE INDEX ux_games ON games(created ASC, user_id ASC);
CREATE UNIQUE INDEX ux_gamehistory ON gamehistories(game_id ASC, questionanswers_id ASC);
CREATE UNIQUE INDEX ux_levels ON levels(description ASC);
CREATE UNIQUE INDEX ux_pictures ON pictures(description ASC);
CREATE UNIQUE INDEX ux_questions ON questions(header ASC, description ASC, questiontype_id ASC);
CREATE UNIQUE INDEX ux_questionanswers ON questionanswers(question_id ASC, answer_id ASC, result ASC);
CREATE UNIQUE INDEX ux_questioncategories ON questioncategories(question_id ASC, category_id ASC);
CREATE UNIQUE INDEX ux_questionlevels ON questionlevels(question_id ASC, level_id ASC);
CREATE UNIQUE INDEX ux_questiontypes ON questiontypes(description ASC);
CREATE UNIQUE INDEX ux_users ON users(email ASC);
CREATE UNIQUE INDEX ux_usergroups ON usergroups(description ASC);
