import { Component } from '@angular/core';
import { NgStyle, NgClass } from '@angular/common';

@Component({
  selector: 'app-shortterm',
  standalone: true,
  imports: [NgStyle, NgClass],
  templateUrl: './shortterm.component.html',
  styleUrl: './shortterm.component.css'
})
export class ShorttermComponent {

  public movedImg : boolean = false;
  public index : number = -1;
  public textIndex : number = 0;
  public firstTime : boolean = true;
 
  public firstImages : string[] = ["https://cdn.psychologytoday.com/sites/default/files/styles/article-inline-half/public/field_blog_entry_images/1369847707_4085_memory-1.jpg?itok=aZRKeJXR", 
  "https://www.olympiabenefits.com/hubfs/Vega/Blog%20Pages/Psychology/What%20is%20memory.png", 
  "https://mindworks.org/app/uploads/2023/06/Does-Meditation-Improve-memory.jpg"];

  public secondImages : string[] = ["https://media.npr.org/assets/img/2023/08/07/gettyimages-1440469647-db0c65c135844b757df227afebfa240fd400630c.jpg",
  "https://images.ctfassets.net/cnu0m8re1exe/uTkqQAbjpnnpceaY9UzLE/2d49aaee28ca31631c33a02ff89b437c/brainresearch.jpg?fm=jpg&fl=progressive&w=660&h=433&fit=fill",
  "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTERe-RZMXEfeALxm-QfjABDm_b2ggQEBJdng&usqp=CAU"];
    
  public thirdImages : string[] = [
  "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTF8a2YKUyrUrEEkYxECnP4zI3LXpfEhhEZhg&usqp=CAU",  
  "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZ95HvxEmQ-GQBMSL48P-DpN445HLKgqG2EmJu57Fr8Ix4rw0mkf01iMh3Hew2gS3I9JI&usqp=CAU",
  "https://images.theconversation.com/files/171522/original/file-20170530-23699-itx0un.jpg?ixlib=rb-1.1.0&rect=0%2C181%2C2987%2C2163&q=45&auto=format&w=926&fit=clip"];
  
  public memoryTexts : string[] = [
    "Memoria a corto plazo",
    "La memoria a corto plazo es la capacidad para almacenar, mantener y recuperar cierta cantidad de información durante un corto periodo de tiempo.",
    "Cuando la información pasa a estar disponible por un tiempo indefinido, es cuando hablamos de memoria a largo plazo"];

  nextStep(){
    this.movedImg =! this.movedImg;
    this.firstTime = false;
    if(this.movedImg){
      if(this.index === 2){
        this.index = 0;
      }else{
        this.index++;
      }
      if(this.textIndex === 2){
        this.textIndex = 0;
      }else{
        this.textIndex++;
      }
    }
  }

  previousStep(){
    this.movedImg =! this.movedImg;
    if(this.movedImg){
      if(this.index === 0){
        this.index = 2;
      }else{
        this.index--;
      }
      if(this.textIndex === 0){
        this.textIndex = 2;
      }else{
        this.textIndex--;
      }
    }
  }
  
}
