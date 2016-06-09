<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c11b63bf37fcbb774887de6cbba6acfd7999b691560506f3f6e22981ea672222 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50a0cd293a4fc707695b72ad2e6aa5cb273339a16745df3854d31b1b40ee938b = $this->env->getExtension("native_profiler");
        $__internal_50a0cd293a4fc707695b72ad2e6aa5cb273339a16745df3854d31b1b40ee938b->enter($__internal_50a0cd293a4fc707695b72ad2e6aa5cb273339a16745df3854d31b1b40ee938b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_50a0cd293a4fc707695b72ad2e6aa5cb273339a16745df3854d31b1b40ee938b->leave($__internal_50a0cd293a4fc707695b72ad2e6aa5cb273339a16745df3854d31b1b40ee938b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b68664aa422351bd2ef2ea4075b86f3e64681923a8215f8c3c3b121cb9598d8 = $this->env->getExtension("native_profiler");
        $__internal_5b68664aa422351bd2ef2ea4075b86f3e64681923a8215f8c3c3b121cb9598d8->enter($__internal_5b68664aa422351bd2ef2ea4075b86f3e64681923a8215f8c3c3b121cb9598d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5b68664aa422351bd2ef2ea4075b86f3e64681923a8215f8c3c3b121cb9598d8->leave($__internal_5b68664aa422351bd2ef2ea4075b86f3e64681923a8215f8c3c3b121cb9598d8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
