<?php
use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('login', 'Auth::login');
$routes->get('register', 'Auth::register');

//quiz
$routes->get('materi', 'MateriController::index');
$routes->get('quiz_toefl', 'QuizController::index');
$routes->get('quiz/quiz-soal', 'QuizController::quiz_soal');
$routes->get('quiz/result', 'QuizController::result');

//history
$routes->get('dashboard_history', 'HistoryController::index');
$routes->get('history/history', 'HistoryController::grafik');

//structure
$routes->get('materi/structure/structure', 'MateriController::structure');
$routes->get('materi/structure/adjective-clause-connector', 'MateriController::adjective_clause_connector');
$routes->get('materi/structure/adverb-clause-connector', 'MateriController::adverb_clause_connector');
$routes->get('materi/structure/cordinate-connector', 'MateriController::cordinate_connector');
$routes->get('materi/structure/countable-uncountable-noun', 'MateriController::countable_uncountable_noun');
$routes->get('materi/structure/noun-clause-connector', 'MateriController::noun_clause_connector');
$routes->get('materi/structure/possessive-pronoun', 'MateriController::possessive_pronoun');
$routes->get('materi/structure/singular-plural-nouns', 'MateriController::singular_plural_nouns');
$routes->get('materi/structure/subject-object-pronouns', 'MateriController::subject_object_pronouns');

//writing
$routes->get('materi/writing/writing', 'MateriController::writing');
$routes->get('materi/writing/subject-verb-agreement', 'MateriController::subject_verb_agreement');
$routes->get('materi/writing/agreement-after-certain-words', 'MateriController::agreement_after_certain_words');
$routes->get('materi/writing/agreement-after-expression-of-quantity', 'MateriController::agreement_after_expression_of_quantity');
$routes->get('materi/writing/agreement-after-prepositional-phrase', 'MateriController::agreement_after_prepositional_phrase');
$routes->get('materi/writing/parallel-structure', 'MateriController::parallel_structure');
$routes->get('materi/writing/parallel-coordinate', 'MateriController::parallel_coordinate_conjuction');
$routes->get('materi/writing/parallel-paired', 'MateriController::parallel_paired_conjuction');
$routes->get('materi/writing/present-participle', 'MateriController::present_participle');
$routes->get('materi/writing/past-participle', 'MateriController::past_participle');
$routes->get('materi/writing/present-participle-after-be', 'MateriController::present_participle_after_be');
$routes->get('materi/writing/base-form', 'MateriController::base_form');

//reading
$routes->get('materi/reading/reading', 'MateriController::reading');
$routes->get('materi/reading/skimming-scanning', 'MateriController::skimming_scanning');
$routes->get('materi/reading/vocabulary', 'MateriController::vocabulary');
$routes->get('materi/reading/main-idea', 'MateriController::main_idea');
$routes->get('materi/reading/stated-detail-information', 'MateriController::stated_detail_information');
$routes->get('materi/reading/unstated-detail-information', 'MateriController::unstated_detail_information');
$routes->get('materi/reading/references', 'MateriController::references');
$routes->get('materi/reading/inferences', 'MateriController::inferences');

//listening
$routes->get('materi/listening/listening', 'MateriController::listening');
$routes->get('materi/listening/listening-short-conversations', 'MateriController::listening_short_conversations');
$routes->get('materi/listening/listening-longer-conversations', 'MateriController::listening_longer_conversations');
$routes->get('materi/listening/listening-talks-notetaking', 'MateriController::listening_talks_notetaking');