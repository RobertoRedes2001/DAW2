import { Component } from '@angular/core';
import { ReactiveFormsModule, FormControl, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-form-two',
  standalone: true,
  imports: [ReactiveFormsModule],
  templateUrl: './form-two.component.html',
  styleUrl: './form-two.component.css'
})
export class FormTwoComponent {
  reactiveForm = new FormGroup({
    name: new FormControl('', { nonNullable: true }),
    email: new FormControl('', { nonNullable: true }),
    age: new FormControl('', [
      Validators.required,
      Validators.max(99),
      Validators.min(18)
    ]),
});

  public onSubmit(): void {
    console.log('form: ', this.reactiveForm);
    console.log('form: ', this.reactiveForm.value);
    console.log('form: ', this.reactiveForm.value.age);
    console.log('form: ', this.reactiveForm.getRawValue());
    console.log('form: ', this.reactiveForm.reset());
    console.log('form: ', this.reactiveForm.value);
  }
}
