import Hero from "@/components/LandingPage/Hero"
import Story from "@/components/LandingPage/Story"
import Problem from "@/components/LandingPage/Problem"
import Solution from "@/components/LandingPage/Solution"
import Testimonials from "@/components/LandingPage/Testimonials"
import Offer from "@/components/LandingPage/Offer"
import Urgency from "@/components/LandingPage/Urgency"
import FixedCTA from "@/components/LandingPage/FixedCTA"

const Index = () => {
  return (
    <main className="min-h-screen bg-background">
      <Hero />
      <Story />
      <Problem />
      <Solution />
      <Testimonials />
      <Urgency />
      <Offer />
      <FixedCTA />
    </main>
  );
};

export default Index;
