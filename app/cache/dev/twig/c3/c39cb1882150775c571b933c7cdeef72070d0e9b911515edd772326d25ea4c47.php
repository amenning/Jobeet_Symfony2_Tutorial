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
        $__internal_653bbf9f123b241b4820f994a2635c6c9df339c2fc6334dc228e21291d7430d0 = $this->env->getExtension("native_profiler");
        $__internal_653bbf9f123b241b4820f994a2635c6c9df339c2fc6334dc228e21291d7430d0->enter($__internal_653bbf9f123b241b4820f994a2635c6c9df339c2fc6334dc228e21291d7430d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_653bbf9f123b241b4820f994a2635c6c9df339c2fc6334dc228e21291d7430d0->leave($__internal_653bbf9f123b241b4820f994a2635c6c9df339c2fc6334dc228e21291d7430d0_prof);

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
