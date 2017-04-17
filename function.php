// code to hide project side bars on all categories except tours

$terms = get_the_terms( $post->ID , 'pj-categs' );
foreach ( $terms as $term ) {
$checkterm = $term->name;
$excersionsterm = 'Sri Lanka';

}


if (strcmp($checkterm, $excersionsterm) !== 0) {
   
    echo '<style type="text/css">.project_sidebar { display:none;} .cmsmasters_open_project .project_content.with_sidebar { width: 100% !Important; float:left; } </style>';
   
} else {
	
	
}
