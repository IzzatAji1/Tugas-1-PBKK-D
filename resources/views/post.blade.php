
<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
        {{-- <article class="py-8 max-w-screen-md">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            <div>
                By
                <a href="/authors/{{ $post->author->username }}"class="hover:underline text-base text-gray-500">
                    {{ $post->author->name }}</a>
                in
                <a href="#" class="hover:underline text-base text-gray-500"> {{ $post->Category->name }}</a> | {{ $post->created_at->diffForHumans() }}   
                </div>

            <p class="my-4 font-light">{{ $post['body'] }}</p>
            
            <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to post </a>
        </article> --}}

        {{-- <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="flex justify-between items-center mb-5 text-gray-500">
                <a href="/categories/{{ $post->category->slug }}">
                    <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800 hover:underline">
                        {{ $post->category->name }}
                    </span>
                </a>

                <span class="text-sm">{{ $post->created_at->DiffForHumans() }}</span>
            </div>
            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                <a href="/posts/{{ $post['slug'] }} " class="hover:underline">{{ $post['title'] }}</a></h2>
            <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ $post['body'] }}</p>
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Leos avatar" />
                    <a href="/authors/{{ $post->author->username }}">
                        <span class="font-medium dark:text-white">
                            {{ $post->author->name }}
                        </span>
                    </a>

                </div>
                <a href="/posts" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                    Back to post
                    <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </article>  --}}



<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <a href="/posts" class="font-medium text-xs text-blue-500 hover:underline">&laquo; Back to post </a>
                <address class="flex items-center my-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->author->name }}">
                        <div>
                            <a href="/posts?author={{ $post->author->username }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                            <p class="text-base text-gray-500 dark:text-gray-400">{{ $post->created_at->diffForHumans() }}</time></p>
                            <div class="flex justify-between items-center mb-5 text-gray-500">
                                <a href="/posts?category={{ $post->category->slug }}">
                                    <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800 hover:underline">
                                        {{ $post->category->name }}
                                    </span>
                                </a>
                                
                        </div>
                    </div>
                </address>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">Best practices for successful prototypes</h1>
            </header>

            <p>Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This way,
                you can think things through before committing to an actual design project.</p>
        </article>
    </div>
</main>

    </article>
</x-layout>
