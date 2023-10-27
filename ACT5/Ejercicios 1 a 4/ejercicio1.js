const photos = Array.from(document.getElementsByClassName("photo"));

photos.map((photo, index) => photo.style.backgroundImage  = "url('images/" + (index+1) + ".jpg')");
