import { useState, useEffect } from "react"
import { Clock } from "lucide-react"

const Countdown = () => {
  const [timeLeft, setTimeLeft] = useState({
    hours: 23,
    minutes: 59,
    seconds: 59
  })

  useEffect(() => {
    const timer = setInterval(() => {
      setTimeLeft(prev => {
        if (prev.seconds > 0) {
          return { ...prev, seconds: prev.seconds - 1 }
        } else if (prev.minutes > 0) {
          return { ...prev, minutes: prev.minutes - 1, seconds: 59 }
        } else if (prev.hours > 0) {
          return { hours: prev.hours - 1, minutes: 59, seconds: 59 }
        } else {
          // Reset timer
          return { hours: 23, minutes: 59, seconds: 59 }
        }
      })
    }, 1000)

    return () => clearInterval(timer)
  }, [])

  return (
    <div className="bg-destructive/10 border border-destructive/20 rounded-xl p-6 text-center">
      <div className="flex items-center justify-center gap-2 mb-4">
        <Clock className="h-5 w-5 text-destructive animate-pulse" />
        <span className="font-semibold text-destructive">OFERTA POR TEMPO LIMITADO</span>
      </div>
      
      <div className="flex justify-center gap-4 mb-4">
        <div className="bg-destructive text-destructive-foreground rounded-lg p-3 min-w-[60px]">
          <div className="text-2xl font-bold">{String(timeLeft.hours).padStart(2, '0')}</div>
          <div className="text-xs">HORAS</div>
        </div>
        <div className="flex items-center text-destructive text-2xl font-bold">:</div>
        <div className="bg-destructive text-destructive-foreground rounded-lg p-3 min-w-[60px]">
          <div className="text-2xl font-bold">{String(timeLeft.minutes).padStart(2, '0')}</div>
          <div className="text-xs">MIN</div>
        </div>
        <div className="flex items-center text-destructive text-2xl font-bold">:</div>
        <div className="bg-destructive text-destructive-foreground rounded-lg p-3 min-w-[60px]">
          <div className="text-2xl font-bold">{String(timeLeft.seconds).padStart(2, '0')}</div>
          <div className="text-xs">SEG</div>
        </div>
      </div>
      
      <p className="text-sm text-muted-foreground">
        Após este prazo, o ebook voltará ao preço normal de R$ 97
      </p>
    </div>
  )
}

export default Countdown