import { Component } from '@angular/core';

@Component({
  selector: 'app-menu',
  standalone: true,
  imports: [],
  templateUrl: './menu.component.html',
  styleUrl: './menu.component.css'
})
export class MenuComponent {
  ngOnInit() {
    let header = document.getElementsByTagName('h2')[0];
    let list = document.getElementsByTagName('ul')[0];
    list.style.display = "none";
    header.addEventListener("click",function(){
      if(list.style.display==="none"){
        list.style.display = "block";
      }else{
        list.style.display = "none";
      }
    })
  }
}
