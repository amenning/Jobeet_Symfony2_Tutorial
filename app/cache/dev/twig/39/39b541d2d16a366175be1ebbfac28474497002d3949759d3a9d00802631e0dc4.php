<?php

/* @SonataBlock/Block/block_container.html.twig */
class __TwigTemplate_3e31a06e77b291fd4f9e32cb3062335dad245b1e4180387f24ec53481503e349 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5baab0c5f2d82151e576d2b6e94e9f2758136ffdc39facb924e989e83ba3639 = $this->env->getExtension("native_profiler");
        $__internal_e5baab0c5f2d82151e576d2b6e94e9f2758136ffdc39facb924e989e83ba3639->enter($__internal_e5baab0c5f2d82151e576d2b6e94e9f2758136ffdc39facb924e989e83ba3639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5baab0c5f2d82151e576d2b6e94e9f2758136ffdc39facb924e989e83ba3639->leave($__internal_e5baab0c5f2d82151e576d2b6e94e9f2758136ffdc39facb924e989e83ba3639_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_eeb5964919d6e83a4bc0c4c1d52e2d90d9431c0b5f1a2e05a018f69abaf17bf5 = $this->env->getExtension("native_profiler");
        $__internal_eeb5964919d6e83a4bc0c4c1d52e2d90d9431c0b5f1a2e05a018f69abaf17bf5->enter($__internal_eeb5964919d6e83a4bc0c4c1d52e2d90d9431c0b5f1a2e05a018f69abaf17bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_eeb5964919d6e83a4bc0c4c1d52e2d90d9431c0b5f1a2e05a018f69abaf17bf5->leave($__internal_eeb5964919d6e83a4bc0c4c1d52e2d90d9431c0b5f1a2e05a018f69abaf17bf5_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_0a3ad2915b5222cd1a7fd1c245a066ddeb65b863a739668f82dd984f14162610 = $this->env->getExtension("native_profiler");
        $__internal_0a3ad2915b5222cd1a7fd1c245a066ddeb65b863a739668f82dd984f14162610->enter($__internal_0a3ad2915b5222cd1a7fd1c245a066ddeb65b863a739668f82dd984f14162610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_0a3ad2915b5222cd1a7fd1c245a066ddeb65b863a739668f82dd984f14162610->leave($__internal_0a3ad2915b5222cd1a7fd1c245a066ddeb65b863a739668f82dd984f14162610_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_8470e267bf8b0e075aa00bfaad2918fb95f23a15b2a1aa403f2a8b7bb9ca07fe = $this->env->getExtension("native_profiler");
        $__internal_8470e267bf8b0e075aa00bfaad2918fb95f23a15b2a1aa403f2a8b7bb9ca07fe->enter($__internal_8470e267bf8b0e075aa00bfaad2918fb95f23a15b2a1aa403f2a8b7bb9ca07fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_8470e267bf8b0e075aa00bfaad2918fb95f23a15b2a1aa403f2a8b7bb9ca07fe->leave($__internal_8470e267bf8b0e075aa00bfaad2918fb95f23a15b2a1aa403f2a8b7bb9ca07fe_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_6478b21429cb1cc49484730da85435ccabcdac916d0502c6076dfeb57a2e6459 = $this->env->getExtension("native_profiler");
        $__internal_6478b21429cb1cc49484730da85435ccabcdac916d0502c6076dfeb57a2e6459->enter($__internal_6478b21429cb1cc49484730da85435ccabcdac916d0502c6076dfeb57a2e6459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_6478b21429cb1cc49484730da85435ccabcdac916d0502c6076dfeb57a2e6459->leave($__internal_6478b21429cb1cc49484730da85435ccabcdac916d0502c6076dfeb57a2e6459_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 25,  123 => 24,  113 => 28,  99 => 27,  96 => 24,  78 => 23,  73 => 22,  67 => 21,  55 => 18,  36 => 15,  21 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {# block classes are prepended with a container class #}*/
/* {% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}*/
/* */
/* {# identify a block role used by the page editor #}*/
/* {% block block_role %}container{% endblock %}*/
/* */
/* {# render container block #}*/
/* {% block block %}*/
/*     {% if decorator %}{{ decorator.pre|raw }}{% endif %}*/
/*     {% for child in block.children %}*/
/*         {% block block_child_render %}*/
/*             {{ sonata_block_render(child) }}*/
/*         {% endblock %}*/
/*     {% endfor %}*/
/*     {% if decorator %}{{ decorator.post|raw }}{% endif %}*/
/* {% endblock %}*/
/* */
