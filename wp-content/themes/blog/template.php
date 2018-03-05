<?php


function get_query_template( $type, $templates = array() ) {
    $type = preg_replace( '|[^a-z0-9-]+|', '', $type );
 
    if ( empty( $templates ) )
        $templates = array("{$type}.php");
 
    /**
     * Filters the list of template filenames that are searched for when retrieving a template to use.
	 
     *
     * The last element in the array should always be the fallback template for this query type.
     *
     * Possible values for `$type` include: 'index', '404', 'archive', 'author', 'category', 'tag', 'taxonomy', 'date',
     * 'embed', 'home', 'frontpage', 'page', 'paged', 'search', 'single', 'singular', and 'attachment'.
     *
     * @since 4.7.0
     *
     * @param array $templates A list of template candidates, in descending order of priority.
     */
    $templates = apply_filters( "{$type}_template_hierarchy", $templates );
 
    $template = locate_template( $templates );
 
    /**
     * Filters the path of the queried template by type.
     *
     * The dynamic portion of the hook name, `$type`, refers to the filename -- minus the file
     * extension and any non-alphanumeric characters delimiting words -- of the file to load.
     * This hook also applies to various types of files loaded as part of the Template Hierarchy.
     *
     * Possible values for `$type` include: 'index', '404', 'archive', 'author', 'category', 'tag', 'taxonomy', 'date',
     * 'embed', 'home', 'frontpage', 'page', 'paged', 'search', 'single', 'singular', and 'attachment'.
     *
     * @since 1.5.0
     * @since 4.8.0 The `$type` and `$templates` parameters were added.
     *
     * @param string $template  Path to the template. See locate_template().
     * @param string $type      Filename without extension.
     * @param array  $templates A list of template candidates, in descending order of priority.
     */
    return apply_filters( "{$type}_template", $template, $type, $templates );
}
?>