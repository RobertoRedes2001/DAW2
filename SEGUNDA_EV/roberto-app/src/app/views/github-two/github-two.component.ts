import { Component } from '@angular/core';
import { GithubService } from '../../services/github.service';

@Component({
  selector: 'app-github-two',
  standalone: true,
  imports: [],
  templateUrl: './github-two.component.html',
  styleUrl: './github-two.component.css'
})
export class GithubTwoComponent {
  public constructor(public service : GithubService ){}
}
