<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Resume creator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:0.6;background-color:#fff;
            background-color:#00293A}.bg-gray-100{--bg-opacity:1;
            background-color:#00293A;background-color:white;}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:52rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            
        </style>
        
    </head>
    
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-black-700 underline" style="color:#D0211C;"><h2 class="h2">Home</h2></a>
                    @else
                        <a href="{{ route('login') }}" class="text-lg text-black-700 underline" style="color:#D0211C;">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-lg text-black-700 underline" style="color:#D0211C;">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg height="100" viewBox="0 0 512 512" width="100" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m400 440h64v-424h-360v56z" fill="#ff9811"/><path d="m48 72h352v424h-352z" fill="#ffeb99"/><path d="m216 96h160v168h-160z" fill="#e0e0e2"/><g fill="#78b9eb"><path d="m72 392h24v24h-24z"/><path d="m72 448h24v24h-24z"/><path d="m72 224h120v40h-120z"/><path d="m72 160h120v40h-120z"/><path d="m72 96h120v40h-120z"/></g><g><path d="m326.82 146.29c-29.29 12.78-51.62 13.56-62.82 12.77v-4.86a31.991 31.991 0 0 1 32-32 31.443 31.443 0 0 1 22.63 9.77 33.473 33.473 0 0 1 8.19 14.32z" fill="#ff5023"/><path d="m328 155v23.8c0 17.67-14.33 31-32 31a32.561 32.561 0 0 1 -22.63-8.87 30.329 30.329 0 0 1 -9.37-22.13v-19.74c11.2.79 33.53.01 62.82-12.77a32.693 32.693 0 0 1 1.18 8.71z" fill="#ffdaaa"/><path d="m312 226h20a20 20 0 0 1 20 20v20h-112v-20a20 20 0 0 1 20-20z" fill="#006df0"/><path d="m312 209.77v16.23a16 16 0 0 1 -32 0v-16.23z" fill="#ffdaaa"/></g></g><g><path d="m464 8h-360a8 8 0 0 0 -8 8v48h-48a8 8 0 0 0 -8 8v424a8 8 0 0 0 8 8h352a8 8 0 0 0 8-8v-48h56a8 8 0 0 0 8-8v-424a8 8 0 0 0 -8-8zm-72 480h-336v-408h336zm64-56h-48v-360a8 8 0 0 0 -8-8h-288v-40h344z"/><path d="m376 88h-160a8 8 0 0 0 -8 8v168a8 8 0 0 0 8 8h160a8 8 0 0 0 8-8v-168a8 8 0 0 0 -8-8zm-32 168h-96v-12a12.01 12.01 0 0 1 12-12h13.38a23.99 23.99 0 0 0 45.24 0h13.38a12.01 12.01 0 0 1 12 12zm-24-100.35v21.15c0 12.9-10.54 23-24 23s-24-10.1-24-23v-11.55c11.23-.18 27.79-2.15 48-9.6zm-47.81-6.4a23.745 23.745 0 0 1 44.09-9.29c-18.77 7.18-33.94 9.1-44.09 9.29zm31.81 65.8v8.95a8 8 0 0 1 -16 0v-8.95a43.042 43.042 0 0 0 16 0zm64 40.95h-8v-12a28.031 28.031 0 0 0 -28-28h-12v-7.8a38.381 38.381 0 0 0 16-31.4v-24.6c0-.21-.01-.42-.02-.62-.74-21.85-18.39-39.38-39.98-39.38a40.04 40.04 0 0 0 -40 40v24.6a38.381 38.381 0 0 0 16 31.4v7.8h-12a28.031 28.031 0 0 0 -28 28v12h-8v-152h144z"/><path d="m376 384h-256a8 8 0 0 0 0 16h256a8 8 0 0 0 0-16z"/><path d="m120 424h136a8 8 0 0 0 0-16h-136a8 8 0 0 0 0 16z"/><path d="m288 424a8 8 0 0 0 0-16h-8a8 8 0 0 0 0 16z"/><path d="m96 384h-24a8 8 0 0 0 -8 8v24a8 8 0 0 0 8 8h24a8 8 0 0 0 8-8v-24a8 8 0 0 0 -8-8zm-8 24h-8v-8h8z"/><path d="m376 440h-256a8 8 0 0 0 0 16h256a8 8 0 0 0 0-16z"/><path d="m256 464h-136a8 8 0 0 0 0 16h136a8 8 0 0 0 0-16z"/><path d="m288 464h-8a8 8 0 0 0 0 16h8a8 8 0 0 0 0-16z"/><path d="m96 440h-24a8 8 0 0 0 -8 8v24a8 8 0 0 0 8 8h24a8 8 0 0 0 8-8v-24a8 8 0 0 0 -8-8zm-8 24h-8v-8h8z"/><path d="m376 280h-304a8 8 0 0 0 0 16h304a8 8 0 0 0 0-16z"/><path d="m376 304h-304a8 8 0 0 0 0 16h304a8 8 0 0 0 0-16z"/><path d="m376 328h-304a8 8 0 0 0 0 16h304a8 8 0 0 0 0-16z"/><path d="m72 368h112a8 8 0 0 0 0-16h-112a8 8 0 0 0 0 16z"/><path d="m216 368a8 8 0 0 0 0-16h-8a8 8 0 0 0 0 16z"/><path d="m72 272h120a8 8 0 0 0 8-8v-40a8 8 0 0 0 -8-8h-120a8 8 0 0 0 -8 8v40a8 8 0 0 0 8 8zm8-40h104v24h-104z"/><path d="m72 208h120a8 8 0 0 0 8-8v-40a8 8 0 0 0 -8-8h-120a8 8 0 0 0 -8 8v40a8 8 0 0 0 8 8zm8-40h104v24h-104z"/><path d="m72 144h120a8 8 0 0 0 8-8v-40a8 8 0 0 0 -8-8h-120a8 8 0 0 0 -8 8v40a8 8 0 0 0 8 8zm8-40h104v24h-104z"/></g></g></svg>
               <div class="d-flex ml-4 mt-1">
               <h1 class="h1" style="color:#D0211C;">Resume Creator</h1>
               </div>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 sm:grid-cols-2">
                        <div class="p-6">
                            
                <div class="ml-5">
                    <div>
                        <p style="color:white;">Resume Creator is a minimalist tool that allows you to create your own resumes, 
                        it's simple to use and recommended for the people who is starting
                         to create his first resumes, or just for people who wants a simple but good-looking resume.  
                         </p> 
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
