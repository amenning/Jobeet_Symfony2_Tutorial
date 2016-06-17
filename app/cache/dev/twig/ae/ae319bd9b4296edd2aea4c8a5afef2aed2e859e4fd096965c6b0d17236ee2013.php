<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_17998cdfb8c5fffa0d8c364f3065c98ab514d1f85cd53244b13b580dc2721dc8 extends Twig_Template
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
        $__internal_baef08a3f4c9fb0d39c5b2568aa8f62e88ece15acc6e298527070efe574ba1f5 = $this->env->getExtension("native_profiler");
        $__internal_baef08a3f4c9fb0d39c5b2568aa8f62e88ece15acc6e298527070efe574ba1f5->enter($__internal_baef08a3f4c9fb0d39c5b2568aa8f62e88ece15acc6e298527070efe574ba1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_baef08a3f4c9fb0d39c5b2568aa8f62e88ece15acc6e298527070efe574ba1f5->leave($__internal_baef08a3f4c9fb0d39c5b2568aa8f62e88ece15acc6e298527070efe574ba1f5_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
