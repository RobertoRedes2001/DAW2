const photos = Array.from(document.getElementsByClassName("photo"));

photos.map((photo, index) => photo.innerHTML = "<img width=300 height=300 src='images/" + (index+1) + ".jpg'>");
