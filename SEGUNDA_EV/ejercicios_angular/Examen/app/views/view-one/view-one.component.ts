import { Component } from '@angular/core';
import { CardComponent } from '../../components/card/card.component';
import { ReactiveFormsModule, FormControl, FormGroup, Validators  } from '@angular/forms';
import { RickymortyService } from '../../services/rickymorty.service';
import { Result } from '../../interfaces/rickymorty.interfaces';
import { ModalComponent } from '../../components/modal/modal.component';

@Component({
  selector: 'app-view-one',
  standalone: true,
  imports: [CardComponent,ReactiveFormsModule,ModalComponent],
  templateUrl: './view-one.component.html',
  styleUrl: './view-one.component.css',
})
export class ViewOneComponent {
  public constructor(public service : RickymortyService ){}
  public requestedData : Result[] = [];
  public requested : boolean = false;
  public modal = 'modal';
  public page : number = 1;
  public maxPages : number = 0;
  public character : Result =  {
    id: 0,
    name: '',
    status: '',
    species: '',
    type: '',
    gender: '',
    origin: {
        name: '',
        url: ''
    },
    location: {
        name: '',
        url: ''
    },
    image: '',
    episode: [],
    url: '',
    created: new Date()
  };
  //public episodes : string[] = [];
  public viewModal = false;
  reactiveForm = new FormGroup({
    name: new FormControl('', { nonNullable: true })
  });
  public currentSearch = '';

  public onModal(c : Result, modal : {modal:string,viewModal:boolean}){
    this.modal = modal.modal;
    this.viewModal = modal.viewModal;
    this.character = c;
  }

  onCloseModal(close:string){
    this.modal = close;
    this.viewModal = false;
  }

  public onSubmit(): void {
    this.requested = true;
    
    if(this.currentSearch != this.reactiveForm.getRawValue().name){
      this.currentSearch = this.reactiveForm.getRawValue().name;
      this.page = 1;
      this.onRequest();
    }
   
    this.reactiveForm.reset();
  }

  onRequest() : void{
    this.service.getResponse(this.currentSearch,this.page).subscribe((response) => {
      this.requestedData = response.results;
      this.maxPages = response.info.pages;
     /*  this.requestedData.forEach(result => {
        this.getEpisodeNames(result); // Llama a la función para cada resultado
      }); */
    });
  }

  public nextPage() : void{
    if(this.page>this.maxPages){
      this.page = 1;
      this.onRequest();
    }else{
      this.page++;
      this.onRequest();
    }
  }

  public lastPage() : void{
    if(this.page===1){
      this.page = this.maxPages;
      this.onRequest();
    }else{
      this.page--;
      this.onRequest();
    }
  }
 /*  private getEpisodeNames(result: Result): void {
    result.episode.forEach(episode => {
      
      this.episodes.push(episode.name);
    });
  } */


}
