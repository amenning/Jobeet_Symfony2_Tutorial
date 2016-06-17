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
        $__internal_68fa8d65fff3c0a465bbbf7cfc3e9418da4490444026b3f676856659578c9fae = $this->env->getExtension("native_profiler");
        $__internal_68fa8d65fff3c0a465bbbf7cfc3e9418da4490444026b3f676856659578c9fae->enter($__internal_68fa8d65fff3c0a465bbbf7cfc3e9418da4490444026b3f676856659578c9fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_68fa8d65fff3c0a465bbbf7cfc3e9418da4490444026b3f676856659578c9fae->leave($__internal_68fa8d65fff3c0a465bbbf7cfc3e9418da4490444026b3f676856659578c9fae_prof);

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
