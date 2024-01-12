import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PescadosComponent } from './pescados.component';

describe('PescadosComponent', () => {
  let component: PescadosComponent;
  let fixture: ComponentFixture<PescadosComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PescadosComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(PescadosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
