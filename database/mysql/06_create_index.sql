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
