import { AlertTriangle, Music, Smartphone, Users } from "lucide-react"

const Problem = () => {
  const problems = [
    {
      icon: Music,
      title: "Músicas Inadequadas",
      description: "Letras com conteúdo adulto normalizando comportamentos precoces",
      stats: "89% das músicas populares"
    },
    {
      icon: Smartphone,
      title: "Redes Sociais",
      description: "Algoritmos que empurram conteúdo adulto para perfis infantis",
      stats: "73% das crianças expostas"
    },
    {
      icon: Users,
      title: "Influenciadores",
      description: "Creators que promovem padrões de beleza e comportamento adultos",
      stats: "6 em cada 10 crianças"
    }
  ]

  return (
    <section id="problem" className="py-20 bg-background">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16 animate-fade-in">
          <div className="inline-flex items-center gap-3 bg-destructive/10 text-destructive px-6 py-3 rounded-full mb-6">
            <AlertTriangle className="h-5 w-5" />
            <span className="font-semibold">ALERTA URGENTE</span>
          </div>
          
          <h2 className="text-3xl md:text-4xl font-heading font-bold mb-6">
            Os Verdadeiros Culpados pela{" "}
            <span className="text-destructive">Perda da Inocência</span>
          </h2>
          
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Enquanto você acha que está protegendo seu filho, forças invisíveis 
            estão moldando sua mente de forma irreversível
          </p>
        </div>

        <div className="grid md:grid-cols-3 gap-8 mb-16">
          {problems.map((problem, index) => (
            <div 
              key={index}
              className="bg-card rounded-xl p-6 shadow-medium border border-border hover:shadow-strong transition-all duration-300 animate-slide-up"
              style={{ animationDelay: `${index * 0.2}s` }}
            >
              <div className="flex items-center gap-4 mb-4">
                <div className="p-3 bg-destructive/10 rounded-lg">
                  <problem.icon className="h-6 w-6 text-destructive" />
                </div>
                <div>
                  <h3 className="font-heading font-bold text-lg">{problem.title}</h3>
                  <p className="text-sm text-destructive font-semibold">{problem.stats}</p>
                </div>
              </div>
              
              <p className="text-muted-foreground leading-relaxed">
                {problem.description}
              </p>
            </div>
          ))}
        </div>

        <div className="bg-gradient-to-r from-destructive/5 via-accent/5 to-destructive/5 rounded-2xl p-8 md:p-12 border border-destructive/20">
          <div className="text-center">
            <h3 className="text-2xl md:text-3xl font-heading font-bold mb-6">
              O Que Está Acontecendo com Nossas Crianças?
            </h3>
            
            <div className="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
              <div className="space-y-4">
                <h4 className="font-semibold text-lg text-accent">Antes dos 10 Anos:</h4>
                <ul className="space-y-2 text-left">
                  <li className="flex items-start gap-3">
                    <div className="w-2 h-2 bg-destructive rounded-full mt-2 flex-shrink-0"></div>
                    <span>Preocupação excessiva com aparência física</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <div className="w-2 h-2 bg-destructive rounded-full mt-2 flex-shrink-0"></div>
                    <span>Interesse por temas inadequados para a idade</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <div className="w-2 h-2 bg-destructive rounded-full mt-2 flex-shrink-0"></div>
                    <span>Perda de interesse por brincadeiras infantis</span>
                  </li>
                </ul>
              </div>
              
              <div className="space-y-4">
                <h4 className="font-semibold text-lg text-accent">Consequências:</h4>
                <ul className="space-y-2 text-left">
                  <li className="flex items-start gap-3">
                    <div className="w-2 h-2 bg-warning rounded-full mt-2 flex-shrink-0"></div>
                    <span>Ansiedade e baixa autoestima</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <div className="w-2 h-2 bg-warning rounded-full mt-2 flex-shrink-0"></div>
                    <span>Distorção da imagem corporal</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <div className="w-2 h-2 bg-warning rounded-full mt-2 flex-shrink-0"></div>
                    <span>Comportamentos de risco precoces</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}

export default Problem