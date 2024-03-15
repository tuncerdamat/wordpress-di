<?php

class ClassInit
{
    /**
     * @param PostsRepository $postsRepository
     */
    public function __construct(private readonly PostsRepository $postsRepository)
    {
    }

    public function run() {

        $post = $this->postsRepository->getSomePostByName();
        
        // Do some stuff with the post, update etc. 
    }
}
