<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f732ade2649809760573f5532d49062052050ff62798e62cf83a8985a532e701 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ee09076160d0c7fa184e0197252740a2a48a81d6d811210478246fe7f11721b = $this->env->getExtension("native_profiler");
        $__internal_3ee09076160d0c7fa184e0197252740a2a48a81d6d811210478246fe7f11721b->enter($__internal_3ee09076160d0c7fa184e0197252740a2a48a81d6d811210478246fe7f11721b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee09076160d0c7fa184e0197252740a2a48a81d6d811210478246fe7f11721b->leave($__internal_3ee09076160d0c7fa184e0197252740a2a48a81d6d811210478246fe7f11721b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_98be606308468595841d087d10217063cf9324065677eb544c3898d865f1c789 = $this->env->getExtension("native_profiler");
        $__internal_98be606308468595841d087d10217063cf9324065677eb544c3898d865f1c789->enter($__internal_98be606308468595841d087d10217063cf9324065677eb544c3898d865f1c789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_98be606308468595841d087d10217063cf9324065677eb544c3898d865f1c789->leave($__internal_98be606308468595841d087d10217063cf9324065677eb544c3898d865f1c789_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ec69c7cfbc1f10ba6b94a7bac04a6f280fe986d99ca4d62d8d9b966896724e95 = $this->env->getExtension("native_profiler");
        $__internal_ec69c7cfbc1f10ba6b94a7bac04a6f280fe986d99ca4d62d8d9b966896724e95->enter($__internal_ec69c7cfbc1f10ba6b94a7bac04a6f280fe986d99ca4d62d8d9b966896724e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ec69c7cfbc1f10ba6b94a7bac04a6f280fe986d99ca4d62d8d9b966896724e95->leave($__internal_ec69c7cfbc1f10ba6b94a7bac04a6f280fe986d99ca4d62d8d9b966896724e95_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_14fb9e6d6bc98f43e00838818aab9d46d0a1c1f2ee04cc78321440c725f4f20f = $this->env->getExtension("native_profiler");
        $__internal_14fb9e6d6bc98f43e00838818aab9d46d0a1c1f2ee04cc78321440c725f4f20f->enter($__internal_14fb9e6d6bc98f43e00838818aab9d46d0a1c1f2ee04cc78321440c725f4f20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_14fb9e6d6bc98f43e00838818aab9d46d0a1c1f2ee04cc78321440c725f4f20f->leave($__internal_14fb9e6d6bc98f43e00838818aab9d46d0a1c1f2ee04cc78321440c725f4f20f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
