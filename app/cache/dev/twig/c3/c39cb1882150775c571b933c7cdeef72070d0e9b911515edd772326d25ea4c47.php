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
        $__internal_7c13d560bb8761222f84d05935cbc3d96eb61ea83192589b28f91bb3792ce84b = $this->env->getExtension("native_profiler");
        $__internal_7c13d560bb8761222f84d05935cbc3d96eb61ea83192589b28f91bb3792ce84b->enter($__internal_7c13d560bb8761222f84d05935cbc3d96eb61ea83192589b28f91bb3792ce84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7c13d560bb8761222f84d05935cbc3d96eb61ea83192589b28f91bb3792ce84b->leave($__internal_7c13d560bb8761222f84d05935cbc3d96eb61ea83192589b28f91bb3792ce84b_prof);

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
