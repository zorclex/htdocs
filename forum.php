<?php # Script 17.4 - forum.php
// This page shows the threads in a forum.
include('header.php');

// Retrieve all the messages in this forum...

// The query for retrieving all the threads in this forum, along with the original user,
// when the thread was first posted, when it was last replied to, and how many replies it's had:
// $q = "SELECT t.thread_id, t.subject, name, COUNT(msg_id) - 1 AS responses, MAX(DATE_FORMAT($last, '%e-%b-%y %l:%i %p')) AS last, MIN(DATE_FORMAT($first, '%e-%b-%y %l:%i %p')) AS first FROM threads AS t INNER JOIN posts AS p USING (thread_id) INNER JOIN users AS u ON t.user_id = u.user_id GROUP BY (p.thread_id) ORDER BY last DESC";
$q = "SELECT thread_id, subject FROM threads";
$r = mysqli_query($dbc, $q);
if (mysqli_num_rows($r) > 0) {
    $first = 'p.posted_on';
    $last = 'p.posted_on';
    
    // Create a table:
    echo '<table class="table table-striped">
	<thead>
		<tr>
			<th>' . 'subject' . '</th>
			<th>' . 'posted_by' . '</th>
			<th>' . 'posted_on' . '</th>
			<th>' . 'replies' . '</th>
			<th>' . 'latest_reply' . '</th>
		</tr>
	</thead>
	<tbody>';
    
    // Fetch each thread:
    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        
        echo '<tr>
				<td><a href="read.php?tid=' . $row['thread_id'] . '">' . $row['subject'] . '</a></td>
				<td>' . $row['name'] . '</td>
				<td>' . $row['first'] . '</td>
				<td>' . $row['responses'] . '</td>
				<td>' . $row['last'] . '</td>
			</tr>';
        
    }
    
    echo '</tbody></table>'; // Complete the table.
    
} else {
    echo '<p>There are currently no messages in this forum.</p>';
}

// Include the HTML footer file:
include('footer.html');
?>

