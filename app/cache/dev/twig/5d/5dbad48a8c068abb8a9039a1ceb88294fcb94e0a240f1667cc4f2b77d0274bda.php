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
        $__internal_1b5f622326c24388d1f1c7c1bd7526e53915202f5e3bed070b01aae6f19ad792 = $this->env->getExtension("native_profiler");
        $__internal_1b5f622326c24388d1f1c7c1bd7526e53915202f5e3bed070b01aae6f19ad792->enter($__internal_1b5f622326c24388d1f1c7c1bd7526e53915202f5e3bed070b01aae6f19ad792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1b5f622326c24388d1f1c7c1bd7526e53915202f5e3bed070b01aae6f19ad792->leave($__internal_1b5f622326c24388d1f1c7c1bd7526e53915202f5e3bed070b01aae6f19ad792_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f32979a0439b1213180e476d88b3ae518b6f8fd12dc48fd58570c442d5b8808 = $this->env->getExtension("native_profiler");
        $__internal_9f32979a0439b1213180e476d88b3ae518b6f8fd12dc48fd58570c442d5b8808->enter($__internal_9f32979a0439b1213180e476d88b3ae518b6f8fd12dc48fd58570c442d5b8808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9f32979a0439b1213180e476d88b3ae518b6f8fd12dc48fd58570c442d5b8808->leave($__internal_9f32979a0439b1213180e476d88b3ae518b6f8fd12dc48fd58570c442d5b8808_prof);

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
