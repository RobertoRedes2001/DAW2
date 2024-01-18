import { Component } from '@angular/core';
import { MemesService } from '../../services/memes.service';

@Component({
  selector: 'app-memigo-two',
  standalone: true,
  imports: [],
  templateUrl: './memigo-two.component.html',
  styleUrl: './memigo-two.component.css'
})
export class MemigoTwoComponent {
  public constructor(public service : MemesService ){}
}
