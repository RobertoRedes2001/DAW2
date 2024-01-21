import { Component } from '@angular/core';
import { GithubService } from '../../services/github.service';
import { GitHubItem } from '../../interfaces/github.interfaces';
import { NgStyle, NgClass } from '@angular/common';
import { ModalComponent } from '../../components/modal/modal.component';

@Component({
  selector: 'app-github-two',
  standalone: true,
  imports: [NgStyle, NgClass, ModalComponent],
  templateUrl: './github-two.component.html',
  styleUrl: './github-two.component.css'
})
export class GithubTwoComponent {
  public constructor(public service : GithubService ){}
  public gitProfiles : GitHubItem[] = [];
  public name : string = ''
  public avatar : string = '';
  public modal : string = 'modal'

  public gitGud():void{
    this.service.getResponse("angular").subscribe((response)=>{
      this.gitProfiles = response.items;
    })
  }

  public saveProfile(profileName : string, profileAvatar : string){
    this.name = profileName;
    this.avatar = profileAvatar;
    this.modal = 'modal show-modal';
  }

  onCloseModal(close:string){
    
  }

  ngOnInit() : void{
    this.gitGud();
  }
}
