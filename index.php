<?php

$dom = new DOMDocument();

$dom->encoding = 'utf-8';

$dom->xmlVersion = '1.0';

$dom->formatOutput = true;

$xml_file_name = 'movies_list.xml';

$root = $dom->createElement('conversation');

$movie_node = $dom->createElement('chat');

// $attr_movie_id = new DOMAttr('movie_id', '5467');

// $movie_node->setAttributeNode($attr_movie_id);

$child_node_id = $dom->createElement('id', '0');

$movie_node->appendChild($child_node_id);

$child_node_name = $dom->createElement('name', 'admin');

$movie_node->appendChild($child_node_name);

$child_node_time = $dom->createElement('time', 'Beginning of time');

$movie_node->appendChild($child_node_time);

$child_node_message = $dom->createElement('message', 'Here is the beginning of your conversation');

$movie_node->appendChild($child_node_message);

$root->appendChild($movie_node);

$dom->appendChild($root);

$dom->save($xml_file_name);

echo "$xml_file_name has been successfully created";

?>