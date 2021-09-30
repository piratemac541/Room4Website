<?php

class BlogController {
    private $authorsTable;
    private $blogsTable;

public function __construct(DatabaseTable $blogsTable, DatabaseTable $authorsTable) {
    $this->blogsTable = $blogsTable;
    $this->authorsTable = $authorsTable;
}

    public function list() {
        $result = $this->blogsTable->findAll();

        $blogs = [];
        foreach ($result as $blog) {
            $author = $this->authorsTable->findById($blog['authorId']);


            $blogs[] = [
                'id' => $blog['id'],
                'blogheading' => $blog['blogheading'],
                'blogtext' => $blog['blogtext'],
                'blogdate' => $blog['blogdate'],
                'name' => $author['name'],
                'email' => $author['email']
            ];

        }
        $title = 'Room4 Studios Hire';
        $keywords = 'external hire, rehearsal studio, recording, mixing, EP, album, dry-hire, editing, mixing, Pro Tools, Logic, drum recording, guitar recording';
        $description = 'We have a brilliant recording studio that has been acoustically designed and equipped to provide great value for money. 3 live rooms and loads of great gear.';
        $heading = 'Room4 Blog';
        $subHeading = '';
        
        $totalBlogs = $this->blogsTable->total();

        return ['template' => 'blog.html.php',
                'title' => $title,
                'keywords' => $keywords,
                'description' => $description, 
                'heading' => $heading, 
                'subHeading' => $subHeading,
                'variables' => [
                    'totalBlogs' => $totalBlogs,
                    'blogs' => $blogs
                ]
            ];

    }

    public function home() {
        
        $title = 'Room4 Studios';
        $keywords = 'recording studio, rehearsal studio, recording, mixing, EP, album, dry-hire, editing, mixing, Pro Tools, Logic, drum recording, guitar recording';
        $description = 'We have a brilliant recording studio that has been acoustically designed and equipped to provide great value for money. 3 live rooms and loads of great gear.';
        $heading = 'Welcome to Room4 Studios';
        $subHeading = 'Recording & rehearsal studio in Bristol, UK. We also offer live video services & PA and backline hire';

        return ['template' => 'home.html.php', 'title' => $title, 'keywords' => $keywords, 'description' => $description, 'heading' => $heading, 'subHeading' => $subHeading];
        
    }
    public function rehearsal() {
        
        $title = 'Room4 Studios Hire';
        $keywords = 'external hire, rehearsal studio, recording, mixing, EP, album, dry-hire, editing, mixing, Pro Tools, Logic, drum recording, guitar recording';
        $description = 'We have a brilliant recording studio that has been acoustically designed and equipped to provide great value for money. 3 live rooms and loads of great gear.';
        $heading = 'Rehearsal';
        $subHeading = 'We have 4 acoustically designed & treated rehearsal rooms of varying sizes. The rooms also have very good sound proofing, so you won’t be disturbed by the band next–door. All the rooms come with a PA, mic sets, drum kit, bass amp & guitar amp';

        return ['template' => 'rehearsal.html.php', 'title' => $title, 'keywords' => $keywords, 'description' => $description, 'heading' => $heading, 'subHeading' => $subHeading];
    }

    public function recording() {
        
        $title = 'Room4 Studios Hire';
        $keywords = 'external hire, rehearsal studio, recording, mixing, EP, album, dry-hire, editing, mixing, Pro Tools, Logic, drum recording, guitar recording';
        $description = 'We have a brilliant recording studio that has been acoustically designed and equipped to provide great value for money. 3 live rooms and loads of great gear.';
        $heading = 'Recording';
        $subHeading = 'Is very good here';

        return ['template' => 'recording.html.php', 'title' => $title, 'keywords' => $keywords, 'description' => $description, 'heading' => $heading, 'subHeading' => $subHeading];
    }

    public function video() {
        
        $title = 'Room4 Studios Video';
        $keywords = 'external hire, rehearsal studio, recording, mixing, EP, album, dry-hire, editing, mixing, Pro Tools, Logic, drum recording, guitar recording';
        $description = 'We have a brilliant recording studio that has been acoustically designed and equipped to provide great value for money. 3 live rooms and loads of great gear.';
        $heading = 'Live Music Videos';
        $subHeading = 'Is very good here';

        return ['template' => 'video.html.php', 'title' => $title, 'keywords' => $keywords, 'description' => $description, 'heading' => $heading, 'subHeading' => $subHeading];
    }

    public function hire() {
        
        $title = 'Room4 Studios Hire';
        $keywords = 'external hire, rehearsal studio, recording, mixing, EP, album, dry-hire, editing, mixing, Pro Tools, Logic, drum recording, guitar recording';
        $description = 'We have a brilliant recording studio that has been acoustically designed and equipped to provide great value for money. 3 live rooms and loads of great gear.';
        $heading = 'External Hire';
        $subHeading = 'You can, we will';

        return ['template' => 'hire.html.php', 'title' => $title, 'keywords' => $keywords, 'description' => $description, 'heading' => $heading, 'subHeading' => $subHeading];
    }

    public function vouchers() {
        
        $title = 'Room4 Studios Vouchers';
        $keywords = 'external hire, rehearsal studio, recording, mixing, EP, album, dry-hire, editing, mixing, Pro Tools, Logic, drum recording, guitar recording';
        $description = 'We have a brilliant recording studio that has been acoustically designed and equipped to provide great value for money. 3 live rooms and loads of great gear.';
        $heading = 'Gift Vouchers';
        $subHeading = 'Is very good here';

        return ['template' => 'vouchers.html.php', 'title' => $title, 'keywords' => $keywords, 'description' => $description, 'heading' => $heading, 'subHeading' => $subHeading];
    }

    public function delete() {
        $this->blogsTable->delete($_POST['id']);


    header('location: /blog/list');
    }

    public function edit() {
		if (isset($_POST['blog'])) {

		
            $blog = $_POST['blog'];
            $blog['blogdate'] = new DateTime();
            $blog['authorId'] = 1;
    
            $this->blogsTable->save($blog);
    
            header('location: /blog/list');  
    
        }
        else {
    
            if (isset($_GET['id'])) {
                $blog = $this->blogsTable->findById($_GET['id']);
            }
            $title = 'Room4 Studios Hire';
            $keywords = 'external hire, rehearsal studio, recording, mixing, EP, album, dry-hire, editing, mixing, Pro Tools, Logic, drum recording, guitar recording';
            $description = 'We have a brilliant recording studio that has been acoustically designed and equipped to provide great value for money. 3 live rooms and loads of great gear.';
            $heading = 'Enter/Edit a Blog';
            $subHeading = '';

            return ['template' => 'editblog.html.php',
                'title' => $title, 
                'keywords' => $keywords, 
                'description' => $description, 
                'heading' => $heading, 
                'subHeading' => $subHeading,
                'variables' => [
                    'blog' => $blog ?? null
                ]
            ];
        }
    }

}

