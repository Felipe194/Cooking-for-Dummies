import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ingreso1 } from './ingreso3.component';

describe('ingreso1Component', () => {
  let component: ingreso3Component;
  let fixture: ComponentFixture<ingreso1Component>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ingreso3Component ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ingreso3Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});