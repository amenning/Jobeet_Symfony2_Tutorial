<?php

/* :job:new.html.twig */
class __TwigTemplate_73dded22e503bf237c6d8b1898778fed1716b7a580fd362137c18bdb70434b16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":job:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5b24dc55ea04aa1695d1cd76a2bfa41c230c6cfb30e5c0d240a3a170f53794b = $this->env->getExtension("native_profiler");
        $__internal_b5b24dc55ea04aa1695d1cd76a2bfa41c230c6cfb30e5c0d240a3a170f53794b->enter($__internal_b5b24dc55ea04aa1695d1cd76a2bfa41c230c6cfb30e5c0d240a3a170f53794b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5b24dc55ea04aa1695d1cd76a2bfa41c230c6cfb30e5c0d240a3a170f53794b->leave($__internal_b5b24dc55ea04aa1695d1cd76a2bfa41c230c6cfb30e5c0d240a3a170f53794b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_340746bdce2639202446a44948d02f7609e4a2fa8b1ed6d92338dca744eaae67 = $this->env->getExtension("native_profiler");
        $__internal_340746bdce2639202446a44948d02f7609e4a2fa8b1ed6d92338dca744eaae67->enter($__internal_340746bdce2639202446a44948d02f7609e4a2fa8b1ed6d92338dca744eaae67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Job creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ens_job_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_340746bdce2639202446a44948d02f7609e4a2fa8b1ed6d92338dca744eaae67->leave($__internal_340746bdce2639202446a44948d02f7609e4a2fa8b1ed6d92338dca744eaae67_prof);

    }

    public function getTemplateName()
    {
        return ":job:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Job creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ens_job_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
