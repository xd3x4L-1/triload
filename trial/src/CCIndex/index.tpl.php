<h1>Index Controller</h1>
<p>Welcome to Trial index controller.</p>

<h2>Download</h2>
<p>You can download Trial from github.</p>
<blockquote>
<code>git clone git://github.com/xd3x4L-1/triload.git</code>
</blockquote>
<p>You can review its source directly on github: <a href='https://github.com/xd3x4L-1/triload/trial'>https://github.com/xd3x4L-1/triload/trial</a></p>

<h2>Installation</h2>
Localise directory trial in triload.

<p>First you have to make the data-directory writable. This is the place where Trial needs
to be able to write and create files.<br></br>
Trial do use RewriteBase in the file .htaccess in dir cd trial. The Rewritebase ought to be equal to the local adress of dir trial.<br></br>
Trial do use a different stylesheet for the pages trial/my , trial/my/blog, trial/my/guestbook<br></br>
In trial/src/Origin::__Construct the adresses in the three if-blocks ought to be equal to the local adress of dir trial
with either /my, /my/blog , /my/guestbook in the ending.

</p>

<blockquote>
<code>cd trial; chmod 777 site/data</code><br></br>

<code>cd trial; RewriteBase = local adress of trial; </code>
<br></br>
<code>cd trial/src/origin;<br></br>

if( $_SERVER["REQUEST_URI"]=="local adress of trial  /my" ){$this->a='tre';}<br></br>
			
			if( $_SERVER["REQUEST_URI"]=="local adress of trial  /my/blog" ){$this->a='tre';}<br></br>

			if( $_SERVER["REQUEST_URI"]=="local adress of trial  /my/guestbook" ){$this->a='tre';}</code>


</blockquote>

<p>Second, Trial has some modules that need to be initialised. You can do this through a
controller. Point your browser to the following link.</p>
<blockquote>
<a href='<?=create_url('module/install')?>'>module/install</a>
</blockquote>