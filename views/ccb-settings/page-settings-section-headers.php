<?php if ( 'ccb_section-appearance' == $section['id'] ) : ?>

	<p>Customize the appearance of the Clipchamp button.</p>

<?php elseif ( 'ccb_section-s3' == $section['id'] ) : ?>

	<p>Configuration elements when using Amazon S3 upload target. (<a href="https://blog.clipchamp.com/uploading-videos-from-clipchamp-button-to-aws-s3" target="_blank">configuration instructions for S3</a>)</p>

<?php elseif ( 'ccb_section-azure' == $section['id'] ) : ?>

	<p>Configuration elements when using Microsoft Azure blob storage upload target. (<a href="https://blog.clipchamp.com/uploading-videos-from-clipchamp-button-to-windows-azure" target="_blank">configuration instructions for Azure</a>)</p>

<?php elseif ( 'ccb_section-gdrive' == $section['id'] ) : ?>

	<p>Configuration elements when using Google Drive upload target.</p>

<?php elseif ( 'ccb_section-youtube' == $section['id'] ) : ?>

	<p>Configuration elements when using YouTube upload target.</p>

<?php endif; ?>