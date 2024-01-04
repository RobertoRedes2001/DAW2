import { Component } from '@angular/core';
import { NgClass, NgStyle } from '@angular/common';

@Component({
  selector: 'app-home',
  standalone: true,
  imports: [NgClass, NgStyle],
  templateUrl: './home.component.html',
  styleUrl: './home.component.css'
})
export class HomeComponent {
    //Imagenes de los tipos de memoria
    public memoryImages: string[] = [
      "https://cdn.vox-cdn.com/thumbor/qvJ_PVw2Ppnemy8hxFU2U3RojK0=/1400x0/filters:no_upscale()/cdn.vox-cdn.com/uploads/chorus_asset/file/23165626/memory2final.jpg",
      "https://cdn.psychologytoday.com/sites/default/files/styles/article-inline-half/public/field_blog_entry_images/1369847707_4085_memory-1.jpg?itok=aZRKeJXR",
      "https://donboscoeduca.files.wordpress.com/2019/04/conocimientos-previos.jpg",
      "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTF8a2YKUyrUrEEkYxECnP4zI3LXpfEhhEZhg&usqp=CAU",
      "https://easyscienceforkids.com/wp-content/uploads/2018/04/Memory-facts-18-4-1-758x635.jpg",
      "https://insidememory721788887.files.wordpress.com/2018/10/memory.jpg"
    ];

    public captions : string[] = [
      'Memoria a corto plazo',
      'Memoria a largo plazo',
      'Memoria declarativa',
      'Memoria procedimental',
      'Memoria sensorial',
      'Memoria verbal'
    ];

    public memoryTypes: string[] = [
      'https://conductscience.com/maze/wp-content/uploads/2019/10/Diseases-and-conditions-that-affect-short-term-memory.png',
      'https://conductscience.com/maze/wp-content/uploads/2019/12/Diseases-and-conditions-that-affect-long-term-memory.png',
      'https://media.springernature.com/m685/springer-static/image/art%3A10.1038%2Fnrn2850/MediaObjects/41583_2010_Article_BFnrn2850_Fig1_HTML.jpg',
      'https://static.wixstatic.com/media/a7b893_49ac93653aea4e3da7f46b5de20e8ede~mv2.png/v1/fill/w_640,h_640,al_c,q_90,usm_0.66_1.00_0.01,enc_auto/a7b893_49ac93653aea4e3da7f46b5de20e8ede~mv2.png',
      'https://i.pinimg.com/736x/66/18/74/661874b7751be9d8421e955e2af4213a.jpg',
      'https://www.wikihow.com/images/thumb/7/75/Improve-Verbal-Memory-Step-5-Version-2.jpg/v4-460px-Improve-Verbal-Memory-Step-5-Version-2.jpg'
    ];

    //Variables para controlar los divs y los textos
    public changeImg: boolean = false;
    public changeMem: boolean = false;
    public selectedIndex : number = -1;
    public selectedFirst : boolean = false; 
    public memoryText: number = 1;
    public memoryType : number = 0;

    selectImg(index:number){
      this.selectedFirst = true;
      this.selectedIndex = index;
      this.changeImg = true;
      this.memoryText = 2;
    }

    selectType(){
      this.changeMem = true;
      this.memoryText = 3;
    }

    returnMain(){
      this.selectedFirst = false;
      this.changeImg = false;
      this.changeMem = false;
      this.memoryText = 1;
    }
  
}
