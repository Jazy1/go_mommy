<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Builder</title>
    <link rel="stylesheet" href="https://unpkg.com/grapesjs/dist/css/grapes.min.css">
    <script src="https://unpkg.com/grapesjs"></script>
    <style>
        /* Let's highlight canvas boundaries */
        #gjs {
        border: 3px solid #444;
        }

        /* Reset some default styling */
        .gjs-cv-canvas {
        top: 0;
        width: 100%;
        height: 100%;
        }
    </style>
</head>
<body>
    <div id="gjs">
        <h1>Hello World Component!</h1>
    </div>
    
</body>
<script>
    const editor = grapesjs.init({
        // Indicate where to init the editor. You can also pass an HTMLElement
        container: '#gjs',
        // Get the content for the canvas directly from the element
        // As an alternative we could use: `components: '<h1>Hello World Component!</h1>'`,
        fromElement: true,
        // Size of the editor
        height: '300px',
        width: 'auto',
        // Disable the storage manager for the moment
        storageManager: false,
        // Avoid any default panel
        panels: { defaults: [] },
    });
</script>
</html>