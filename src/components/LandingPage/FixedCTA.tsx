import { useState, useEffect } from "react"
import { Button } from "@/components/ui/button"
import { X } from "lucide-react"

const FixedCTA = () => {
  const [isVisible, setIsVisible] = useState(false)
  const [isScrolled, setIsScrolled] = useState(false)

  useEffect(() => {
    const handleScroll = () => {
      const scrolled = window.scrollY > 800
      setIsScrolled(scrolled)
      
      // Show CTA after scrolling past hero
      if (scrolled && !isVisible) {
        setIsVisible(true)
      }
    }

    window.addEventListener('scroll', handleScroll)
    return () => window.removeEventListener('scroll', handleScroll)
  }, [isVisible])

  const scrollToOffer = () => {
    const offerSection = document.getElementById('offer')
    offerSection?.scrollIntoView({ behavior: 'smooth' })
  }

  if (!isVisible) return null

  return (
    <div className="fixed bottom-0 left-0 right-0 z-50 bg-card/95 backdrop-blur-sm border-t border-border shadow-strong animate-slide-up">
      <div className="container mx-auto px-4 py-4">
        <div className="flex items-center justify-between gap-4">
          <div className="flex-1 min-w-0">
            <p className="text-sm font-medium text-foreground truncate">
              Proteja seus filhos hoje mesmo
            </p>
            <p className="text-xs text-muted-foreground">
              Oferta por tempo limitado
            </p>
          </div>
          
          <div className="flex items-center gap-3">
            <Button 
              variant="cta" 
              size="sm"
              onClick={scrollToOffer}
              className="font-semibold"
            >
              Garantir Agora
            </Button>
            
            <Button
              variant="ghost"
              size="sm"
              onClick={() => setIsVisible(false)}
              className="p-2"
            >
              <X className="h-4 w-4" />
            </Button>
          </div>
        </div>
      </div>
    </div>
  )
}

export default FixedCTA