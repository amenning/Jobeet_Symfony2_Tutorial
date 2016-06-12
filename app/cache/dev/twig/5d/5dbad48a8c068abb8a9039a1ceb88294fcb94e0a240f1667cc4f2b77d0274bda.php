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
        $__internal_99d65839a94c29c6e17ce0cb0427504da676d013b81a76449b5e3cae0485f5a3 = $this->env->getExtension("native_profiler");
        $__internal_99d65839a94c29c6e17ce0cb0427504da676d013b81a76449b5e3cae0485f5a3->enter($__internal_99d65839a94c29c6e17ce0cb0427504da676d013b81a76449b5e3cae0485f5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_99d65839a94c29c6e17ce0cb0427504da676d013b81a76449b5e3cae0485f5a3->leave($__internal_99d65839a94c29c6e17ce0cb0427504da676d013b81a76449b5e3cae0485f5a3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a1d7cd89cba5ff73fdfc1953bc47c77ae09b3fb6109dc2ea5e507dbd673af2e = $this->env->getExtension("native_profiler");
        $__internal_2a1d7cd89cba5ff73fdfc1953bc47c77ae09b3fb6109dc2ea5e507dbd673af2e->enter($__internal_2a1d7cd89cba5ff73fdfc1953bc47c77ae09b3fb6109dc2ea5e507dbd673af2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2a1d7cd89cba5ff73fdfc1953bc47c77ae09b3fb6109dc2ea5e507dbd673af2e->leave($__internal_2a1d7cd89cba5ff73fdfc1953bc47c77ae09b3fb6109dc2ea5e507dbd673af2e_prof);

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
