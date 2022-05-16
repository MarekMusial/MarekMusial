import pygame
import pygame_menu
import lekcja1
def zmianaRozdzielczosci(nazwaPola,Atrybut):
    lekcja1.rozdzielczosc=Atrybut
def zmienKolorWaz1(value):
    lekcja1.zmianaKolorWaz1(value)
def zmienKolorWaz2(value):
    lekcja1.zmianaKolorWaz2(value)
def main():
    pygame.init()
    OknoMenu = pygame.display.set_mode((400,400))
    pygame.display.set_caption("Menu_Snake")
    menu = pygame_menu.Menu('Snake 3TI',400,400,theme=pygame_menu.themes.THEME_DARK)
 
    menu.add.button("Start Gry",lekcja1.main,background_color=(0,0,0))
    menu.add.selector("Rozmiar Ekranu",[('400x400',400),('600x600',600),('800x800',800)],onchange=zmianaRozdzielczosci)
    menu.add.color_input("Kolor wąż 1", 'rgb',default=(25,25,100),onreturn=zmienKolorWaz1)
    menu.add.color_input("Kolor wąż 2", 'rgb',default=(255,255,255),onreturn=zmienKolorWaz2)
    menu.mainloop(OknoMenu)
main()

