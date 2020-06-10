<script>
    $(function() {
        tinymce.init({
          // tinymce.activeEditor.getContent()
            selector: '#deskripsi_galeri',
            theme:'modern',
            height: 400,
            branding: false,
            menubar: false,
            // language: "id",
            skin: "lightgray",
            plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                    "table contextmenu directionality emoticons paste textcolor code"
                    ],
            toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
            toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
            image_advtab: true,
            relative_urls:true,
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css']
        });
    });

//     tinymce.init({ 
//     selector:'#content', 
//     theme:'modern',
//     branding: false,
//     menubar: false,
//     language: "id",
//     skin: "lightgray",
//     plugins: [
//             "advlist autolink link image lists charmap print preview hr anchor pagebreak",
//             "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
//             "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
//             ],
//     toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
//     toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
//     image_advtab: true,
//     relative_urls:true,
//     external_filemanager_path: "{!! str_finish(asset('js/filemanager'),'/') !!}",
//     external_filemanager_path: "/js/filemanager/",
//     filemanager_title:"Responsive Filemanager" ,
//     external_plugins: { "filemanager" : "/js/filemanager/plugin.min.js"}  
// });
// });
</script>