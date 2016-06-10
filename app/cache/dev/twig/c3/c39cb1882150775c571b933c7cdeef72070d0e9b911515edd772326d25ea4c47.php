<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_317e00ae12d63fb11364de1e7b29f8b1285c4a9bbfa35279ea54c75d73ff0539 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9f70f2f6ac9b3a180708fd1cf1891e191d978f191480dac22e3fe10462d016e = $this->env->getExtension("native_profiler");
        $__internal_e9f70f2f6ac9b3a180708fd1cf1891e191d978f191480dac22e3fe10462d016e->enter($__internal_e9f70f2f6ac9b3a180708fd1cf1891e191d978f191480dac22e3fe10462d016e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e9f70f2f6ac9b3a180708fd1cf1891e191d978f191480dac22e3fe10462d016e->leave($__internal_e9f70f2f6ac9b3a180708fd1cf1891e191d978f191480dac22e3fe10462d016e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
