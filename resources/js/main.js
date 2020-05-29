// Pass id to delete modal
$('.delete-button').on('click', function (event) {
    event.preventDefault();
    const url = $(this).data('url');
    console.log(url);
    $('#deleteModalForm').attr('action', url);
});

// // Magnific Popup
// $('.image-popup').magnificPopup({
//     type: 'image',
//     closeOnContentClick: true,
//     closeBtnInside: false,
//     fixedContentPos: true,
//     mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
//     image: {
//         verticalFit: true
//     },
//     zoom: {
//         enabled: true,
//         duration: 300 // don't foget to change the duration also in CSS
//     }
// });

//Initialize File pond
const fileElement = document.querySelector('.filepond');
FilePond.registerPlugin(
    FilePondPluginImagePreview,
    FilePondPluginFileEncode,
    FilePondPluginFilePoster
);
const filepond = FilePond.create(fileElement);
FilePond.create({
    source: '12345', //don't know what should be the value
    options: {
        type: 'local',
        file: {
            name: 'hedgehog.jpg',
            size: 189397, //correct size of the file
            type: 'image/jpeg'
        },
        metadata: {
            // poster: 'http://laspark.test/storage/parkss/477403056.png'
        }
    }
})