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
        $__internal_37402ab4be9196851117809c6b8e7698ba9e834b17e1a57b1c5f3680b3f43015 = $this->env->getExtension("native_profiler");
        $__internal_37402ab4be9196851117809c6b8e7698ba9e834b17e1a57b1c5f3680b3f43015->enter($__internal_37402ab4be9196851117809c6b8e7698ba9e834b17e1a57b1c5f3680b3f43015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_37402ab4be9196851117809c6b8e7698ba9e834b17e1a57b1c5f3680b3f43015->leave($__internal_37402ab4be9196851117809c6b8e7698ba9e834b17e1a57b1c5f3680b3f43015_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ffae0385c1d601099c391ebe3418626538647091f4acf9ed9704542c0b12983c = $this->env->getExtension("native_profiler");
        $__internal_ffae0385c1d601099c391ebe3418626538647091f4acf9ed9704542c0b12983c->enter($__internal_ffae0385c1d601099c391ebe3418626538647091f4acf9ed9704542c0b12983c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ffae0385c1d601099c391ebe3418626538647091f4acf9ed9704542c0b12983c->leave($__internal_ffae0385c1d601099c391ebe3418626538647091f4acf9ed9704542c0b12983c_prof);

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
