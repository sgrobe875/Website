<nav>
    <ol>
    <li>
    <a class="<?php
if (PATH_PARTS['filename'] == "about"){
    print'activePage';
}
    ?>" href="index.php">Top of Page</a>
    </li>
    <li>
    <a class="<?php
    if (PATH_PARTS['filename'] == "about"){
        print'activePage';
    }
    ?>" href="#about">About Me</a>
</li>

<li>
    <div class="dropdown">
    <button class="dropbtn"><a class="<?php
    if (PATH_PARTS['filename'] == "admin"){
        print'activePage';
    }
    ?>" href="#work">My Experience</a>
    
      <i class="fa fa-caret-down"></i>
    </button>
    
    <div class="dropdown-content">
      <a href="#prof">Professional Experience</a>
      <a href="#other">Other Experience</a>
    </div>
  </div>
  </li>


<li>
    <div class="dropdown">
    <button class="dropbtn"><a class="<?php
    if (PATH_PARTS['filename'] == "admin"){
        print'activePage';
    }
    ?>" href="#analysis">Coding & Analysis</a>
    
      <i class="fa fa-caret-down"></i>
    </button>
    
    <div class="dropdown-content">
      <a href="#proj">Projects</a>
      <a href="#code">Coding Samples</a>
      <a href="#writing">Writing Samples</a>
    </div>
  </div>
  </li>
<li>

    <a class="<?php
    if (PATH_PARTS['filename'] == "contact"){
        print'activePage';
    }
    ?>" href="#contact">Contact Me</a>
</li>
</ol>
  
</nav>