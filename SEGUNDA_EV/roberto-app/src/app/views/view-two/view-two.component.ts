import { Component } from '@angular/core';
import { ContentComponent } from '../../components/content/content.component';
import { RickymortyService } from '../../services/rickymorty.service';
import { Result } from '../../interfaces/rickymorty.interfaces';

@Component({
  selector: 'app-view-two',
  standalone: true,
  imports: [ContentComponent],
  templateUrl: './view-two.component.html',
  styleUrl: './view-two.component.css'
})
export class ViewTwoComponent {
  public constructor(public service : RickymortyService ){}
  public rickormorties : Result[] = [];
  public view : string = "viewTwo";
  public chargeRequested : boolean = false;
  public enriqueMortadelo = {
    img1 : 'https://www.nosolorol.com/img/nbp/1/7/9/5/1795-large.jpg',
    img2 : 'https://i.blogs.es/8c50c2/rick-morty/840_560.jpeg',
    text : 'Rick and Morty',
    styleOne : 'inline-block',
    styleTwo : 'inline-block',
    displayClass : 'image-container2',
  }

  public loadRick(request:string){
    this.chargeRequested = true;
    this.service.getResponse(request).subscribe((response)=>{
      this.rickormorties = response.results;
    })
  }

  public loadMorty(request:string){
    this.chargeRequested = true;
    this.service.getResponse(request).subscribe((response)=>{
      this.rickormorties = response.results;
    })
  }

}
