const Story = () => {
  return (
    <section className="py-20 bg-secondary/30">
      <div className="container mx-auto px-4">
        <div className="max-w-4xl mx-auto">
          <div className="text-center mb-12 animate-fade-in">
            <h2 className="text-3xl md:text-4xl font-heading font-bold mb-6">
              A História que Toda Mãe Teme Viver
            </h2>
            <div className="w-24 h-1 bg-accent mx-auto rounded-full"></div>
          </div>
          
          <div className="bg-card rounded-2xl p-8 md:p-12 shadow-medium border border-border animate-slide-up">
            <div className="aspect-video w-full rounded-lg overflow-hidden">
              <iframe 
                src="https://drive.google.com/file/d/1PTCQmLcCMxCupJ7DnS8VGceMldEcxu_Y/preview" 
                width="100%" 
                height="100%" 
                allow="autoplay"
                className="w-full h-full"
                title="História sobre adultização infantil"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}

export default Story