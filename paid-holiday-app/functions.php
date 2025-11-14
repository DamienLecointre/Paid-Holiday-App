<?php
function mon_theme_supports()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mon_theme_supports');

function mon_theme_enqueue_styles()
{
  wp_enqueue_style('mon-style', get_stylesheet_uri());
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/style/main.css', array('mon-style'), '1.0');
  wp_enqueue_style('left-container-style', get_template_directory_uri() . '/assets/style/leftContainer.css', array('mon-style'), '1.0');
  wp_enqueue_style('right-container-style', get_template_directory_uri() . '/assets/style/rightContainer.css', array('mon-style'), '1.0');
  wp_enqueue_style('calendar-style', get_template_directory_uri() . '/assets/style/calendar.css', array('mon-style'), '1.0');
  wp_enqueue_style('popup-style', get_template_directory_uri() . '/assets/style/popup.css', array('mon-style'), '1.0');

  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"', false);
  wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', array(), '6.5.0');
}
add_action('wp_enqueue_scripts', 'mon_theme_enqueue_styles');

function enqueue_chartjs()
{
  wp_enqueue_script('chartjs', 'https://cdn.jsdelivr.net/npm/chart.js', [], null, true);

  wp_enqueue_script(
    'my-doughnut',
    get_template_directory_uri() . '/assets/javascript/doughnutGraph.js',
    ['chartjs'],
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'enqueue_chartjs');

function enqueue_fullcalendar_assets()
{
  wp_enqueue_style('fullcalendar-core', 'https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.15/index.global.min.css');
  wp_enqueue_style('fullcalendar-daygrid', 'https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.15/index.global.min.css');
  wp_enqueue_style('fullcalendar-multimonth', 'https://cdn.jsdelivr.net/npm/@fullcalendar/multimonth@6.1.15/index.global.min.css');
  wp_enqueue_script('fullcalendar-core', 'https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.15/index.global.min.js', [], null, true);
  wp_enqueue_script('fullcalendar-daygrid', 'https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.15/index.global.min.js', ['fullcalendar-core'], null, true);
  wp_enqueue_script('fullcalendar-multimonth', 'https://cdn.jsdelivr.net/npm/@fullcalendar/multimonth@6.1.15/index.global.min.js', ['fullcalendar-core'], null, true);
  wp_enqueue_script(
    'fullcalendar-locale-fr',
    'https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.15/locales/fr.global.min.js',
    array('fullcalendar-core'),
    null,
    true
  );

  wp_enqueue_script(
    'custom-calendar',
    get_stylesheet_directory_uri() . '/assets/javascript/calendar.js',
    ['fullcalendar-core', 'fullcalendar-daygrid', 'fullcalendar-multimonth'],
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'enqueue_fullcalendar_assets');

function enqueue_actions()
{
  wp_enqueue_script(
    'actions',
    get_template_directory_uri() . '/assets/javascript/actions.js',
    [],
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'enqueue_actions');
add_filter('show_admin_bar', function ($show) {
  return current_user_can('administrator');
});

function handleRedirection($redirect_to, $requested_redirect_to, $user)
{
  if (isset($user->roles) && is_array($user->roles)) {
    $userRole = $user->roles[0];
    if ($userRole === 'subscriber') {
      return home_url();
    }
  }
  return $redirect_to;
}

add_filter('login_redirect', 'handleRedirection', 10, 3);
add_filter('logout_redirect', 'handleRedirection', 10, 3);

add_action('init', function () {
  remove_post_type_support('conges-payes', 'editor');
});

add_filter('manage_conges-payes_posts_columns', function ($columns) {
  $columns['date_de_debut'] = 'Date de début';
  $columns['date_de_fin'] = 'Date de fin';
  $columns['motif'] = 'Motif';
  $columns['statut'] = 'Statut';
  return $columns;
});

add_action('manage_conges-payes_posts_custom_column', function ($column, $post_id) {
  switch ($column) {
    case 'date_de_debut':
      echo get_field('date_de_debut', $post_id);
      break;
    case 'date_de_fin':
      echo get_field('date_de_fin', $post_id);
      break;
    case 'motif':
      echo get_field('motif', $post_id);
      break;
    case 'statut':
      echo get_field('statut', $post_id);
      break;
    default:
      break;
  }
}, 10, 2);

add_filter('default_title', function($title, $post) {
    if ($post->post_type === 'conges-payes') {
      $current_user = wp_get_current_user();
      $title = 'Demande de congés payés de ' . $current_user->user_login;
    }
    return $title;
}, 10, 2);

// echo '<pre>';
// var_dump( wp_get_current_user() );
// echo '</pre>';
