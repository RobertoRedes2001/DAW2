import { Component } from '@angular/core';
import { MemesService } from '../../services/memes.service';

@Component({
  selector: 'app-memigo-three',
  standalone: true,
  imports: [],
  templateUrl: './memigo-three.component.html',
  styleUrl: './memigo-three.component.css'
})
export class MemigoThreeComponent {
  public constructor(public service : MemesService ){}
}
