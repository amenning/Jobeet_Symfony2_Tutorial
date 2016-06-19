<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f7779c896b5db9d6affc8af5fc7be11fa8a71c0e249a02c0dffd3c0b9179c35f extends Twig_Template
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
        $__internal_922f15f89cebd5c0b6d4c2f60f1ff05cf79b69937dc1c57b7275b1cc90973f9f = $this->env->getExtension("native_profiler");
        $__internal_922f15f89cebd5c0b6d4c2f60f1ff05cf79b69937dc1c57b7275b1cc90973f9f->enter($__internal_922f15f89cebd5c0b6d4c2f60f1ff05cf79b69937dc1c57b7275b1cc90973f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_922f15f89cebd5c0b6d4c2f60f1ff05cf79b69937dc1c57b7275b1cc90973f9f->leave($__internal_922f15f89cebd5c0b6d4c2f60f1ff05cf79b69937dc1c57b7275b1cc90973f9f_prof);

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
