$(document).ready(function(){

        //Category image
    $('#image').on('change',function(){
        // Check file api supported browser
        if(window.File && window.FileReader && window.FileList && window.Blob){
            // Clear html of output element
            $('#thumb-output').html('');

            // This file data
        var  data = $(this)[0].files;

            // Loop through each file
            $.each(data, function (index, file){
                // Check supported types
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
                    // Create new file reader
                    var fRead =  new FileReader();
                    // Trigger function on successful read
                    fRead.onload = (function(file){
                        return function(e){
                        // Create image element
                        var img = $('<img/>').addClass('thumb').attr('src',e.target.result);
                        // Append image to output element
                        $('#thumb-output').append(img);

                        };
                    })(file);
                    // URL representing the files`s data
                    fRead.readAsDataURL(file);
                }
            });
        } else {
            // If file API absent
            alert('Your browser does not support File API')
        }
    });

        //Category image
    $('#home_image').on('change',function(){
        // Check file api supported browser
        if(window.File && window.FileReader && window.FileList && window.Blob){
            // Clear html of output element
            $('#home-output').html('');

            // This file data
        var  data = $(this)[0].files;

            // Loop through each file
            $.each(data, function (index, file){
                // Check supported types
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
                    // Create new file reader
                    var fRead =  new FileReader();
                    // Trigger function on successful read
                    fRead.onload = (function(file){
                        return function(e){
                        // Create image element
                        var img = $('<img/>').addClass('thumb').attr('src',e.target.result);
                        // Append image to output element
                        $('#home-output').append(img);

                        };
                    })(file);
                    // URL representing the files`s data
                    fRead.readAsDataURL(file);
                }
            });
        } else {
            // If file API absent
            alert('Your browser does not support File API')
        }
    });
        // Category image
    $('#category_image').on('change',function(){
        // Check file api supported browser
        if(window.File && window.FileReader && window.FileList && window.Blob){
            // Clear html of output element
            $('#category-output').html('');

            // This file data
        var  data = $(this)[0].files;

            // Loop through each file
            $.each(data, function (index, file){
                // Check supported types
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
                    // Create new file reader
                    var fRead =  new FileReader();
                    // Trigger function on successful read
                    fRead.onload = (function(file){
                        return function(e){
                        // Create image element
                        var img = $('<img/>').addClass('thumb').attr('src',e.target.result);
                        // Append image to output element
                        $('#category-output').append(img);

                        };
                    })(file);
                    // URL representing the files`s data
                    fRead.readAsDataURL(file);
                }
            });
        } else {
            // If file API absent
            alert('Your browser does not support File API')
        }
        });


        // chef image
    $('#chef_image').on('change',function(){
        // Check file api supported browser
        if(window.File && window.FileReader && window.FileList && window.Blob){
            // Clear html of output element
            $('#chef-output').html('');

            // This file data
        var  data = $(this)[0].files;

            // Loop through each file
            $.each(data, function (index, file){
                // Check supported types
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
                    // Create new file reader
                    var fRead =  new FileReader();
                    // Trigger function on successful read
                    fRead.onload = (function(file){
                        return function(e){
                        // Create image element
                        var img = $('<img/>').addClass('thumb').attr('src',e.target.result);
                        // Append image to output element
                        $('#chef-output').append(img);

                        };
                    })(file);
                    // URL representing the files`s data
                    fRead.readAsDataURL(file);
                }
            });
        } else {
            // If file API absent
            alert('Your browser does not support File API')
        }
        })
        
        
        // Party image
        $('#party_image').on('change',function(){
        // Check file api supported browser
        if(window.File && window.FileReader && window.FileList && window.Blob){
            // Clear html of output element
            $('#party-output').html('');

            // This file data
        var  data = $(this)[0].files;

            // Loop through each file
            $.each(data, function (index, file){
                // Check supported types
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
                    // Create new file reader
                    var fRead =  new FileReader();
                    // Trigger function on successful read
                    fRead.onload = (function(file){
                        return function(e){
                        // Create image element
                        var img = $('<img/>').addClass('thumb').attr('src',e.target.result);
                        // Append image to output element
                        $('#party-output').append(img);

                        };
                    })(file);
                    // URL representing the files`s data
                    fRead.readAsDataURL(file);
                }
            });
        } else {
            // If file API absent
            alert('Your browser does not support File API')
        }
        });
        
        
        // branches image
        $('#branches_image').on('change',function(){
        // Check file api supported browser
        if(window.File && window.FileReader && window.FileList && window.Blob){
            // Clear html of output element
            $('#branches-output').html('');

            // This file data
        var  data = $(this)[0].files;

            // Loop through each file
            $.each(data, function (index, file){
                // Check supported types
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
                    // Create new file reader
                    var fRead =  new FileReader();
                    // Trigger function on successful read
                    fRead.onload = (function(file){
                        return function(e){
                        // Create image element
                        var img = $('<img/>').addClass('thumb').attr('src',e.target.result);
                        // Append image to output element
                        $('#branches-output').append(img);

                        };
                    })(file);
                    // URL representing the files`s data
                    fRead.readAsDataURL(file);
                }
            });
        } else {
            // If file API absent
            alert('Your browser does not support File API')
        }
        });
    // occassions image
        $('#occassion_image').on('change',function(){
        // Check file api supported browser
        if(window.File && window.FileReader && window.FileList && window.Blob){
            // Clear html of output element
            $('#occassion-output').html('');

            // This file data
        var  data = $(this)[0].files;

            // Loop through each file
            $.each(data, function (index, file){
                // Check supported types
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
                    // Create new file reader
                    var fRead =  new FileReader();
                    // Trigger function on successful read
                    fRead.onload = (function(file){
                        return function(e){
                        // Create image element
                        var img = $('<img/>').addClass('thumb').attr('src',e.target.result);
                        // Append image to output element
                        $('#occassion-output').append(img);

                        };
                    })(file);
                    // URL representing the files`s data
                    fRead.readAsDataURL(file);
                }
            });
        } else {
            // If file API absent
            alert('Your browser does not support File API')
        }
        });
   
      
        
        // About us image
        $('#aboutus_image').on('change',function(){
        // Check file api supported browser
        if(window.File && window.FileReader && window.FileList && window.Blob){
            // Clear html of output element
            $('#aboutus-output').html('');

            // This file data
        var  data = $(this)[0].files;

            // Loop through each file
            $.each(data, function (index, file){
                // Check supported types
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
                    // Create new file reader
                    var fRead =  new FileReader();
                    // Trigger function on successful read
                    fRead.onload = (function(file){
                        return function(e){
                        // Create image element
                        var img = $('<img/>').addClass('thumb').attr('src',e.target.result);
                        // Append image to output element
                        $('#aboutus-output').append(img);

                        };
                    })(file);
                    // URL representing the files`s data
                    fRead.readAsDataURL(file);
                }
            });
        } else {
            // If file API absent
            alert('Your browser does not support File API')
        }
        });


   // Contact us image
        $('#contactus_image').on('change',function(){
        // Check file api supported browser
        if(window.File && window.FileReader && window.FileList && window.Blob){
            // Clear html of output element
            $('#contactus-output').html('');

            // This file data
        var  data = $(this)[0].files;

            // Loop through each file
            $.each(data, function (index, file){
                // Check supported types
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
                    // Create new file reader
                    var fRead =  new FileReader();
                    // Trigger function on successful read
                    fRead.onload = (function(file){
                        return function(e){
                        // Create image element
                        var img = $('<img/>').addClass('thumb').attr('src',e.target.result);
                        // Append image to output element
                        $('#contactus-output').append(img);

                        };
                    })(file);
                    // URL representing the files`s data
                    fRead.readAsDataURL(file);
                }
            });
        } else {
            // If file API absent
            alert('Your browser does not support File API')
        }
        });


   // Shareform image
        $('#shareform_image').on('change',function(){
        // Check file api supported browser
        if(window.File && window.FileReader && window.FileList && window.Blob){
            // Clear html of output element
            $('#shareform-output').html('');

            // This file data
        var  data = $(this)[0].files;

            // Loop through each file
            $.each(data, function (index, file){
                // Check supported types
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
                    // Create new file reader
                    var fRead =  new FileReader();
                    // Trigger function on successful read
                    fRead.onload = (function(file){
                        return function(e){
                        // Create image element
                        var img = $('<img/>').addClass('thumb').attr('src',e.target.result);
                        // Append image to output element
                        $('#shareform-output').append(img);

                        };
                    })(file);
                    // URL representing the files`s data
                    fRead.readAsDataURL(file);
                }
            });
        } else {
            // If file API absent
            alert('Your browser does not support File API')
        }
    });



});


// Session flash message time
setTimeout(function() {
    $('.alert').fadeOut();
}, 3000);